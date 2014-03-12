<?php

namespace Clix\Drivers\Cache;

interface CacheInterface
{

    /**
     * Checks to see if a cache with this name exists
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string  $cacheName SHA1 hash of a relatable string
     * @return bool               Boolean of existance
     */
    public function has($cacheName);

    /**
     * Checks to see if our data has been cached
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $cacheName SHA1 hash of a relatable string
     * @return mixed             If no cache exists returns false otherwise
     *                           returns the content of the cache
     */
    public function get($cacheName);

    /**
     * Saves information into a cache
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $cacheName    SHA1 hash of a relatable string
     * @param  mixed  $cacheResults Details to save into the cache
     */
    public function set($cacheName, $values);

}