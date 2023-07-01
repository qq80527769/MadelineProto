<?php declare(strict_types=1);

namespace danog\MadelineProto\EventHandler;

use danog\MadelineProto\MTProto;
use danog\MadelineProto\StrTools;

/**
 * Represents an incoming or outgoing message.
 */
abstract class Message extends Update
{
    /** Message ID */
    public readonly int $id;
    /** Content of the message */
    public readonly string $message;
    /** ID of the chat where the message was sent */
    public readonly int $chatId;
    /** When was the message sent */
    public readonly int $date;

    /** Whether we were mentioned in this message */
    public readonly bool $mentioned;
    /** Whether this message was sent without any notification (silently) */
    public readonly bool $silent;
    /** Whether this message is a sent scheduled message */
    public readonly bool $fromScheduled;
    /** Whether this message is a pinned message */
    public readonly bool $pinned;
    /** Whether this message is protected (and thus can't be forwarded or downloaded) */
    public readonly bool $protected;
    /** If the message was generated by an inline query, ID of the bot that generated it */
    public readonly ?int $viaBotId;

    /** Last edit date of the message */
    public readonly ?int $editDate;

    /** Time-to-live of the message */
    public readonly ?int $ttlPeriod;

    private readonly array $entities;

    // Todo media, reactions, parse_mode, replies, reply_to, reply_markup, fwd_from, incoming/outgoing

    /** @internal */
    public function __construct(
        MTProto $API,
        public readonly array $rawMessage
    ) {
        parent::__construct($API);

        $this->id = $rawMessage['id'];
        $this->message = $rawMessage['message'] ?? '';
        $this->chatId = $this->API->getId($rawMessage);
        $this->date = $rawMessage['date'];
        $this->mentioned = $rawMessage['mentioned'];
        $this->silent = $rawMessage['silent'];
        $this->fromScheduled = $rawMessage['from_scheduled'];
        $this->pinned = $rawMessage['pinned'];
        $this->protected = $rawMessage['noforwards'];
        $this->viaBotId = $rawMessage['via_bot_id'] ?? null;
        $this->editDate = $rawMessage['edit_date'] ?? null;
        $this->ttlPeriod = $rawMessage['ttl_period'] ?? null;
        $this->entities = $rawMessage['entities'];
    }

    /**
     * Get an HTML version of the message.
     *
     * @param bool $allowTelegramTags Whether to allow telegram-specific tags like tg-spoiler, tg-emoji, mention links and so on...
     */
    public function getHTML(bool $allowTelegramTags = false): string
    {
        return StrTools::messageEntitiesToHtml($this->message, $this->entities, $allowTelegramTags);
    }
}