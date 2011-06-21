<?php
require_once 'toro.php';
require_once('../includes.inc.php');
require_once( kPATH_LIBRARY_SOURCE."CMongoOntologyWrapper.php" );
// why in a session? 
$_SESSION[ 'URL' ] = 'http://localhost/~lucamatteis/MongoOntologyWrapper.php';

/**
 * display the skin which contains all of our javascript
 */
class MainHandler extends ToroHandler {
    public function get() { 
        include('ui.php');
    }
}

class OntologyHtml extends ToroHandler {
    public function get($slug) {
        echo $slug;
    }
}

class GetOntologies extends ToroHandler {
    public function get() {
        // get a list of the ontologies using milkos services
		$parameters = Array();
		$parameters[ kAPI_FORMAT ] = kDATA_TYPE_JSON;
		$parameters[ kAPI_OPERATION ] = kAPI_OP_ONTO_GET_ONTO_TERMS;
		$parameters[ kAPI_OPT_LOG_TRACE ] = 1;

		// Show only the global identifier.
		$parameters[ kAPI_DATA_FIELD ] = array( kDEF_TAG_NAME => TRUE,
												kDEF_TAG_ID_GLOBAL => TRUE,
												kTAG_NATIVE_ID => FALSE );
		
		// Sort by global identifier.
		$parameters[ kAPI_DATA_SORT ] = array( kDEF_TAG_ID_GLOBAL => 1 );

        // all this encoding and preparation should be done by library
		$parameters[ kAPI_DATA_FIELD ]
			= urlencode( json_encode ( $parameters[ kAPI_DATA_FIELD ] ) );
		$parameters[ kAPI_DATA_SORT ]
			= urlencode( json_encode ( $parameters[ kAPI_DATA_SORT ] ) );
		$tmp = Array();
		foreach( $parameters as $key => $value ) $tmp[] = "$key=$value";
		$request = $_SESSION[ 'URL' ].'?'.implode( '&', $tmp );


        // make HTTP call to this url. the call shold be on another service
		$response = file_get_contents( $request );

        // just return the JSON
        header('Content-Type: application/json');
		echo $response;
    }
}


// here is the API
$site = new ToroApplication(array(
    array('/', 'MainHandler'),
    array('ontology/([a-zA-Z0-9_\: ]+)', 'OntologyHtml'),
    array('get-ontologies', 'GetOntologies')
));

$site->serve();
?>
