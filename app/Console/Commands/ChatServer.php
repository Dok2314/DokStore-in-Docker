<?php

namespace App\Console\Commands;

use App\Classes\Socket\ChatSocket;
use Illuminate\Console\Command;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class ChatServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat-server:serve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Server to chat';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Start server');

        $server = IoServer::factory(new HttpServer(new WsServer(new ChatSocket())), 8083);

        $server->run();
    }
}
