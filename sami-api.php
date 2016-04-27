<?php

use Sami\Sami;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Version\GitVersionCollection;

$dir = __DIR__.'/../framework/src';

$versions = GitVersionCollection::create($dir)
    ->add('master', 'Slayer Dev')
;

return new Sami($dir, [
    'versions'  => $versions,
    'title'     => 'PhalconSlayer API',
    'build_dir' => __DIR__.'/%version%',
    'cache_dir' => __DIR__.'/__cache__/%version%',
]);
