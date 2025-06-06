<?php

namespace ChristophRumpel\ArtisanBenchmark\Console;

use ChristophRumpel\ArtisanBenchmark\BenchmarksArtisanCommand;
use Illuminate\Console\Command;

class ArtisanBenchmarkCommand extends Command
{
    use BenchmarksArtisanCommand;

    protected $signature = 'benchmark {signature?} {--tableToWatch=}';
}
