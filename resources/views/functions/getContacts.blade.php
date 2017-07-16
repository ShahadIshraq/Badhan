<?php
	use App\Contact;
	function getContacts($id)
	{
		$contacts = Contact::where('user_id', '=', $id)->get();
		return $contacts;
	}
?>