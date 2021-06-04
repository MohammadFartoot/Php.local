<?php

abstract class OnlineGateway
{

    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => '7820526',
                'username' => 'jpt5454',
                'password' => '53453144'
            ),
            'saman' => array(
                'api_key' => '546854541afafedsg485453sg4453453'
            ),
            'parsian' => array(
                'username' => '45448752',
                'password' => 'jfakfmbabjgirk'
            )
        );
    }

    abstract public function sendRequest();

    abstract public function verifyRequest();
}

class Mellat extends OnlineGateway
{
    private $GatewayName ;
    private $mellat_options ;

    public function __construct()
    {
        $this->GatewayName = 'mellat' ;
        parent::__construct();
        $this->mellat_options = $this->options[$this->GatewayName] ;   /*az beyne koli araye ke toye option hast bayad gatewayname behesh bedim ta khodesh ba tavajoh be mellat_options mellat ro peyda kone*/
    }

    public function sendRequest()
    {
        var_dump($this->mellat_options);
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method .
    }
}

/*$mellat = new Mellat() ;
$mellat->sendRequest() ;*/
$gateway= Factory::make('mellat') ;
$gateway->sendRequest();

class Factory
{
    public static function make($class)
    {
        $className = ucfirst($class) ;                      /*gharardade khodemon*/
        if (!class_exists($className)) {
            return false ;
        }
        return new $className ;
    }
}




