<?php
namespace Lsxiao\UserAgent;

use WhichBrowser\Parser;

class UserAgent extends Parser
{

    public function __construct()
    {
        parent::__construct(getallheaders());
    }


    function isCellphone()
    {
        return $this->isType('mobile');
    }

    function isRobot()
    {
        return $this->isType('bot');
    }

    function isTablet()
    {
        return $this->isType('tablet');
    }

    function isGaming()
    {
        return $this->isType('gaming');
    }

    function isEreader()
    {
        return isType('ereader');
    }

    function isMedia()
    {
        return $this->isType('media');
    }

    function isEmulator()
    {
        return $this->isType('emulator');
    }

    function isTV()
    {
        return $this->isType('television');
    }

    function isMonitor()
    {
        return $this->isType('monitor');
    }

    function isCamera()
    {
        return $this->isType('camera');
    }

    function isSignage()
    {
        return $this->isType('signage');
    }

    function isWhiteboard()
    {
        return $this->isType('whiteboard');
    }

    function isCar()
    {
        return $this->isType('car');
    }

    function isPos()
    {
        return $this->isType('pos');
    }

    function parse($headers, $options = [])
    {
        $this->analyse($headers, $options);
        return $this;
    }

}