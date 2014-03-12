<?php

namespace Clix\Drivers\Cache\Facades;

use Clix\Drivers\Cache\CacheInterface;

class Laravel implements CacheInterface
{

    /**
     * Checks to see if a cache with this name exists
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string  $cacheName SHA1 hash of a relatable string
     * @return bool               Boolean of existance
     */
    public function has($cacheName)
    {
        return (\Cache::has($cacheName)) ? true : false;
    }

    /**
     * Checks to see if our data has been cached
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $cacheName SHA1 hash of a relatable string
     * @return mixed             If no cache exists returns false otherwise
     *                           returns the content of the cache
     */
    public function get($cacheName)
    {
        if (\Cache::has($cacheName))
        {
            $cachedInformation = \Cache::get($cacheName);

            if (isset($cachedInformation['cacheDate']) && isset($cachedInformation['cacheInformation']))
            {
                return array($cachedInformation['cacheDate'], $cachedInformation['cacheInformation']);
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    /**
     * Saves information into a cache
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $cacheName    SHA1 hash of a relatable string
     * @param  mixed  $cacheResults Details to save into the cache
     */
    public function set($cacheName, $values)
    {
        $cacheDate = strtotime('NOW');

        $cacheInformation = array(
            'cacheDate'         => $cacheDate,
            'cacheInformation'  => $values,
        );

        \Cache::put($cacheName, $cacheInformation, $cacheDate);

        return array($cacheDate, $values);
    }
}