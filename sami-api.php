<?php

use Sami\Sami;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Version\GitVersionCollection;

$dir = __DIR__.'/../framework/src';

# uncomment this if you want to run without having "clean" based branches
// return new Sami($dir, [
//     'title'     => 'PhalconSlayer API',
//     'build_dir' => __DIR__.'/master',
//     'cache_dir' => __DIR__.'/__cache__/master',
// ]);

$versions = GitVersionCollection::create($dir)
    ->add('master', 'Slayer Dev')
;

return new Sami($dir, [
    'versions'  => $versions,
    'title'     => 'PhalconSlayer API',
    'build_dir' => __DIR__.'/%version%',
    'cache_dir' => __DIR__.'/__cache__/%version%',
]);
