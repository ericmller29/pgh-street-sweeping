<?php

function isActive($path){
	return Request::is($path . '*') ? ' class=active' :  '';
}