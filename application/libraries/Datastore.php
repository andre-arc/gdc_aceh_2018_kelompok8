<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Datastore {
    
    function  __construct()
    {
        $CI = & get_instance();
    }
 
    function load($param=NULL)
    {

        require_once(APPPATH.'third_party\GDS\Exception\GQL.php');
        require_once(APPPATH.'third_party\GDS\Exception\Contention.php');

        require_once(APPPATH.'third_party\GDS\Gateway.php');
        require_once(APPPATH.'third_party\GDS\Gateway\ProtoBuf.php');
        require_once(APPPATH.'third_party\GDS\Gateway\RESTv1.php');

        require_once(APPPATH.'third_party\GDS\Mapper.php');
        require_once(APPPATH.'third_party\GDS\Mapper\ProtoBuf.php');
        require_once(APPPATH.'third_party\GDS\Mapper\ProtoBufGQLParser.php');
        require_once(APPPATH.'third_party\GDS\Mapper\RESTv1.php');

        require_once(APPPATH.'third_party\GDS\Property\Geopoint.php');

        require_once(APPPATH.'third_party\GDS\Store.php');
        require_once(APPPATH.'third_party\GDS\Entity.php');
        require_once(APPPATH.'third_party\GDS\Schema.php');
        
       
       

    }
}