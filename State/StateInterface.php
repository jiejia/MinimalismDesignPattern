<?php
namespace State;

interface StateInterface
{
    public function doAction(Context $context);
}