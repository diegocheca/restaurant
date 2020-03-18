<?php
/*
Codigo generado por artisan:
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaskRemoved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     *
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     *
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
*/


//COdigo copiado desde pusher
 //realtime_todo/app/Events/TaskRemoved.php
    namespace App\Events;
    use Illuminate\Broadcasting\Channel;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Broadcasting\PrivateChannel;
    use Illuminate\Broadcasting\PresenceChannel;
    use Illuminate\Foundation\Events\Dispatchable;
    use Illuminate\Broadcasting\InteractsWithSockets;
    use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
    use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
    class TaskRemoved implements ShouldBroadcastNow
    {
        use Dispatchable, InteractsWithSockets, SerializesModels;

        /**
        * Create a new event instance.
        *
        *  @param $task
        * @return void
        *
        */
            public $task;
            public function __construct($task)
            {
            //
            $this->task = $task;
        }

        /**
        * Get the channels the event should broadcast on.
        *
        * @return \Illuminate\Broadcasting\Channel|array
        */

        public function broadcastOn()
        {
            return new Channel('taskRemoved');
        }

        public function broadcastAs(){
            return 'task-removed';
        }

    }
