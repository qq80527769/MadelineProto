<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Contacts
{
    /**
     * Get contact by telegram IDs.
     *
     * @param list<int>|array<never, never> $hash [Hash for pagination, for more info click here](https://core.telegram.org/api/offsets#hash-generation)
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return list<int>
     */
    public function getContactIDs(array $hash = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array|null;

    /**
     * Returns the list of contact statuses.
     *
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return list<array{_: 'contactStatus', user_id: int, status: array{_: 'userStatusEmpty'}|array{_: 'userStatusOnline', expires: int}|array{_: 'userStatusOffline', was_online: int}|array{_: 'userStatusRecently'}|array{_: 'userStatusLastWeek'}|array{_: 'userStatusLastMonth'}}> Array of  @see https://docs.madelineproto.xyz/API_docs/types/ContactStatus.html
     */
    public function getStatuses(?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array|null;

    /**
     * Returns the current user's contact list.
     *
     * @param list<int>|array<never, never> $hash If there already is a full contact list on the client, a [hash](https://core.telegram.org/api/offsets#hash-generation) of a the list of contact IDs in ascending order may be passed in this parameter. If the contact set was not changed, [(contacts.contactsNotModified)](https://docs.madelineproto.xyz/API_docs/constructors/contacts.contactsNotModified.html) will be returned.
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'contacts.contactsNotModified'}|array{_: 'contacts.contacts', contacts: list<array{_: 'contact', mutual: bool, user_id: int}>, saved_count: int, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/contacts.Contacts.html
     */
    public function getContacts(array $hash = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info.
     *
     * Use [contacts.addContact](https://docs.madelineproto.xyz/API_docs/methods/contacts.addContact.html) to add Telegram contacts without actually using their phone number.
     *
     * @param list<array{_: 'inputPhoneContact', client_id?: int, phone?: string, first_name?: string, last_name?: string}>|array<never, never> $contacts Array of List of contacts to import @see https://docs.madelineproto.xyz/API_docs/types/InputContact.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'contacts.importedContacts', imported: list<array{_: 'importedContact', user_id: int, client_id: int}>, popular_invites: list<array{_: 'popularContact', client_id: int, importers: int}>, retry_contacts: list<int>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/contacts.ImportedContacts.html
     */
    public function importContacts(array $contacts = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Deletes several contacts from the list.
     *
     * @param list<array|int|string>|array<never, never> $id Array of User ID list @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function deleteContacts(array $id = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Delete contacts by phone number.
     *
     * @param list<string>|array<never, never> $phones Phone numbers
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function deleteByPhones(array $phones = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     * Adds the user to the blacklist.
     *
     * @param array|int|string $id User ID @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function block(bool|null $my_stories_from = false, array|int|string|null $id = null, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     * Deletes the user from the blacklist.
     *
     * @param array|int|string $id User ID @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function unblock(bool|null $my_stories_from = false, array|int|string|null $id = null, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     * Returns the list of blocked users.
     *
     * @param int $offset The number of list elements to be skipped
     * @param int $limit The number of list elements to be returned
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'contacts.blocked', blocked: list<array{_: 'peerBlocked', peer_id: array|int|string, date: int}>, chats: list<array|int|string>, users: list<array|int|string>}|array{_: 'contacts.blockedSlice', count: int, blocked: list<array{_: 'peerBlocked', peer_id: array|int|string, date: int}>, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/contacts.Blocked.html
     */
    public function getBlocked(bool|null $my_stories_from = false, int|null $offset = 0, int|null $limit = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Returns users found by username substring.
     *
     * @param string $q Target substring
     * @param int $limit Maximum number of users to be returned
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'contacts.found', my_results: list<array|int|string>, results: list<array|int|string>, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/contacts.Found.html
     */
    public function search(string|null $q = '', int|null $limit = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Get most used peers.
     *
     * @param bool $correspondents Users we've chatted most frequently with
     * @param bool $bots_pm Most used bots
     * @param bool $bots_inline Most used inline bots
     * @param bool $phone_calls Most frequently called users
     * @param bool $forward_users Users to which the users often forwards messages to
     * @param bool $forward_chats Chats to which the users often forwards messages to
     * @param bool $groups Often-opened groups and supergroups
     * @param bool $channels Most frequently visited channels
     * @param int $offset Offset for [pagination](https://core.telegram.org/api/offsets)
     * @param int $limit Maximum number of results to return, [see pagination](https://core.telegram.org/api/offsets)
     * @param list<int>|array<never, never> $hash [Hash for pagination, for more info click here](https://core.telegram.org/api/offsets#hash-generation)
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'contacts.topPeersNotModified'}|array{_: 'contacts.topPeers', categories: list<array{_: 'topPeerCategoryPeers', category: array{_: 'topPeerCategoryBotsPM'}|array{_: 'topPeerCategoryBotsInline'}|array{_: 'topPeerCategoryCorrespondents'}|array{_: 'topPeerCategoryGroups'}|array{_: 'topPeerCategoryChannels'}|array{_: 'topPeerCategoryPhoneCalls'}|array{_: 'topPeerCategoryForwardUsers'}|array{_: 'topPeerCategoryForwardChats'}, count: int, peers: list<array{_: 'topPeer', peer: array|int|string, rating: float}>}>, chats: list<array|int|string>, users: list<array|int|string>}|array{_: 'contacts.topPeersDisabled'} @see https://docs.madelineproto.xyz/API_docs/types/contacts.TopPeers.html
     */
    public function getTopPeers(bool|null $correspondents = false, bool|null $bots_pm = false, bool|null $bots_inline = false, bool|null $phone_calls = false, bool|null $forward_users = false, bool|null $forward_chats = false, bool|null $groups = false, bool|null $channels = false, int|null $offset = 0, int|null $limit = 0, array $hash = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Reset [rating](https://core.telegram.org/api/top-rating) of top peer.
     *
     * @param array{_: 'topPeerCategoryBotsPM'}|array{_: 'topPeerCategoryBotsInline'}|array{_: 'topPeerCategoryCorrespondents'}|array{_: 'topPeerCategoryGroups'}|array{_: 'topPeerCategoryChannels'}|array{_: 'topPeerCategoryPhoneCalls'}|array{_: 'topPeerCategoryForwardUsers'}|array{_: 'topPeerCategoryForwardChats'} $category Top peer category @see https://docs.madelineproto.xyz/API_docs/types/TopPeerCategory.html
     * @param array|int|string $peer Peer whose rating should be reset @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function resetTopPeerRating(array $category, array|int|string|null $peer = null, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     * Delete saved contacts.
     *
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function resetSaved(?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     * Get all contacts.
     *
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return list<array{_: 'savedPhoneContact', phone: string, first_name: string, last_name: string, date: int}> Array of  @see https://docs.madelineproto.xyz/API_docs/types/SavedContact.html
     */
    public function getSaved(?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array|null;

    /**
     * Enable/disable [top peers](https://core.telegram.org/api/top-rating).
     *
     * @param bool $enabled Enable/disable
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function toggleTopPeers(bool $enabled, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     * Add an existing telegram user as contact.
     *
     * Use [contacts.importContacts](https://docs.madelineproto.xyz/API_docs/methods/contacts.importContacts.html) to add contacts by phone number, without knowing their Telegram ID.
     *
     * @param bool $add_phone_privacy_exception Allow the other user to see our phone number?
     * @param array|int|string $id Telegram ID of the other user @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param string $first_name First name
     * @param string $last_name Last name
     * @param string $phone User's phone number
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function addContact(bool|null $add_phone_privacy_exception = false, array|int|string|null $id = null, string|null $first_name = '', string|null $last_name = '', string|null $phone = '', ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * If the [peer settings](https://docs.madelineproto.xyz/API_docs/constructors/peerSettings.html) of a new user allow us to add them as contact, add that user as contact.
     *
     * @param array|int|string $id The user to add as contact @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function acceptContact(array|int|string|null $id = null, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Get contacts near you.
     *
     * @param bool $background While the geolocation of the current user is public, clients should update it in the background every half-an-hour or so, while setting this flag. <br>Do this only if the new location is more than 1 KM away from the previous one, or if the previous location is unknown.
     * @param array{_: 'inputGeoPointEmpty'}|array{_: 'inputGeoPoint', lat: float, long: float, accuracy_radius?: int} $geo_point Geolocation @see https://docs.madelineproto.xyz/API_docs/types/InputGeoPoint.html
     * @param int $self_expires If set, the geolocation of the current user will be public for the specified number of seconds; pass 0x7fffffff to disable expiry, 0 to make the current geolocation private; if the flag isn't set, no changes will be applied.
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function getLocated(bool|null $background = false, array|null $geo_point = null, int|null $self_expires = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Stop getting notifications about [thread replies](https://core.telegram.org/api/threads) of a certain user in `@replies`.
     *
     * @param bool $delete_message Whether to delete the specified message as well
     * @param bool $delete_history Whether to delete all `@replies` messages from this user as well
     * @param bool $report_spam Whether to also report this user for spam
     * @param int $msg_id ID of the message in the [@replies](https://core.telegram.org/api/threads#replies) chat
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function blockFromReplies(bool|null $delete_message = false, bool|null $delete_history = false, bool|null $report_spam = false, int|null $msg_id = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Resolve a phone number to get user info, if their privacy settings allow it.
     *
     * @param string $phone Phone number in international format, possibly obtained from a [phone number deep link](https://core.telegram.org/api/links#phone-number-links).
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'contacts.resolvedPeer', peer: array|int|string, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/contacts.ResolvedPeer.html
     */
    public function resolvePhone(string|null $phone = '', ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Generates a [temporary profile link](https://core.telegram.org/api/links#temporary-profile-links) for the currently logged-in user.
     *
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'exportedContactToken', url: string, expires: int} @see https://docs.madelineproto.xyz/API_docs/types/ExportedContactToken.html
     */
    public function exportContactToken(?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Obtain user info from a [temporary profile link](https://core.telegram.org/api/links#temporary-profile-links).
     *
     * @param string $token The token extracted from the [temporary profile link](https://core.telegram.org/api/links#temporary-profile-links).
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array|int|string @see https://docs.madelineproto.xyz/API_docs/types/User.html
     */
    public function importContactToken(string|null $token = '', ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array|int|string;

    /**
     *
     *
     * @param list<int>|array<never, never> $id
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function editCloseFriends(array $id = [], ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;

    /**
     *
     *
     * @param list<array|int|string>|array<never, never> $id Array of  @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?string $queueId If specified, ensures strict execution order of postponed calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     */
    public function setBlocked(bool|null $my_stories_from = false, array $id = [], int|null $limit = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): bool;
}
