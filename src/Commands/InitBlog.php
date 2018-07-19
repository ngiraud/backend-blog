<?php

namespace NGiraud\BackendBlog\Commands;

use Illuminate\Console\Command;

class InitBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Will initialize the blog part of the application by creating Post types Post and Page';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('posttype:create', [
            'name' => 'Post',
            '--ctrl-folder' => 'Bko',
            '--migrate' => true,
        ]);
    }
}
