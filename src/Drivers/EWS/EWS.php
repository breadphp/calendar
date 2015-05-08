<?php
namespace Bread\Calendar\Drivers\EWS;

use Bread\Configuration\Manager as Configuration;
use Bread\Calendar\Interfaces\Driver;
use Bread\Calendar\Model;

class EWS implements Driver
{

    protected $ews;

    public function __construct($uri)
    {
        $version = Configuration::get(__CLASS__, 'ews.version');
        $this->ews = new ExchangeWebServices(parse_url($uri, PHP_URL_HOST), parse_url($uri, PHP_URL_USER), parse_url($uri, PHP_URL_PASS), $version);
    }

    public function send(Model $model)
    {
        $request = new Type\CreateItem();
        $request->Items = new Type\NonEmptyArrayOfAllItems();

        $request->Items->CalendarItem = new Type\CalendarItem();
        $request->Items->CalendarItem->Subject = $model->subject;

        $request->Items->CalendarItem->Start = $model->start->format('c');
        $request->Items->CalendarItem->End = $model->end->format('c');

        $request->Items->CalendarItem->Body = new Type\Body();
        $request->Items->CalendarItem->Body->BodyType = Type\BodyType::HTML;
        $request->Items->CalendarItem->Body->_ = $model->description;

        $request->Items->CalendarItem->Location = $model->location;


        $request->Items->CalendarItem->IsResponseRequested = false;
        $request->Items->CalendarItem->ItemClass = new Type\ItemClass();
        $request->Items->CalendarItem->ItemClass->_ = Type\ItemClass::APPOINTMENT;
        $request->Items->CalendarItem->Importance = new Type\ImportanceChoices();
        switch ((string) $model->severity) {
            case Model::SEVERITY_LOW:
                $request->Items->CalendarItem->Importance->_ = Type\ImportanceChoices::LOW;
                break;
            case Model::SEVERITY_MEDIUM:
                $request->Items->CalendarItem->Importance->_ = Type\ImportanceChoices::NORMAL;
                break;
            case Model::SEVERITY_HIGH:
                $request->Items->CalendarItem->Importance->_ = Type\ImportanceChoices::HIGH;
                break;
        }
        if ($model->attendees) {
            $request->Items->CalendarItem->RequiredAttendees = new Type\NonEmptyArrayOfAttendees();
            $request->SendMeetingInvitations = Type\CalendarItemCreateOrDeleteOperation::SEND_ONLY_TO_ALL;
            foreach ($model->attendees as $i => $attendee) {
                $request->Items->CalendarItem->RequiredAttendees->Attendee[$i] = new Type\Attendee();
                $request->Items->CalendarItem->RequiredAttendees->Attendee[$i]->Mailbox = new Type\EmailAddress();
                $request->Items->CalendarItem->RequiredAttendees->Attendee[$i]->Mailbox->EmailAddress = $attendee->mail;
                $request->Items->CalendarItem->RequiredAttendees->Attendee[$i]->Mailbox->Routing = 'SMTP';
            }
        }
        //TODO attachments
        $response = $this->ews->CreateItem($request);
        /**
         * @see http://msdn.microsoft.com/en-US/library/aa564690(v=exchg.140).aspx
         */
        if (isset($response->ResponseMessages->CreateItemResponseMessage->Items->CalendarItem->ItemId->Id)) {
            $model->id = $response->ResponseMessages->CreateItemResponseMessage->Items->CalendarItem->ItemId->Id;
            $model->changeKey = $response->ResponseMessages->CreateItemResponseMessage->Items->CalendarItem->ItemId->ChangeKey;
            return true;
        }
        return false;
    }
}