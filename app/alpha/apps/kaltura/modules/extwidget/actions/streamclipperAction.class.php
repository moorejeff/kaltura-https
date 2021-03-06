<?php
class streamclipperAction extends kalturaAction
{
	public function execute()
	{
		$entry_id = $this->getRequestParameter ( "entryId" );
		
		// workaround the filter which hides all the deleted entries - 
		// now that deleted entries are part of xmls (they simply point to the 'deleted' templates), we should allow them here
		$entry = entryPeer::retrieveByPKNoFilter( $entry_id );
		if ( ! $entry )
		{
			KExternalErrors::dieError(KExternalErrors::ENTRY_NOT_FOUND);
		}
		
		if ( $entry->getType() != entry::ENTRY_TYPE_LIVE_STREAM || $entry->getStatus() == entry::ENTRY_STATUS_DELETED )
		{
			// because the fiter was turned off - a manual check for deleted entries must be done.
			die;
		}
				
		$file = "{$entry_id}_1@" . $entry->getStreamRemoteId();

		// Commented out next line and replaced with line under by AR per http://www.kaltura.org/kaltura-ce-v30-red5-integration-guide
		//$streamer = 'rtmp://cp' . $entry->getStreamUsername() . '.live.edgefcs.net/live/';
		$streamer = "rtmp://kaltura-test.swarthmore.edu/oflaDemo";
		$this->logMessage( "streamclipper: serving entry [$entry_id] file[$file] streamer[$streamer]" , "warning" );
		
		$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<config>
	<file>$file</file>
	<subscribe>true</subscribe>
	<streamer>$streamer</streamer>
	<type>fcsubscribe</type>
</config>";
		
		
		header("Content-Type: text/xml; charset=UTF-8");
		echo $xml;
		die;
	}
}
