<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


/*
Codigo generado automaticamente

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
*/

//codigo extraido de pusher
    Broadcast::channel('newTask', function(){
        return true;
    });
    Broadcast::channel('taskRemoved', function(){
        return true;
    });
	Broadcast::channel('ticketChannel', function () {
		return true; //Always return true or false
	});