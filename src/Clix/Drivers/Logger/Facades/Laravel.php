<?php

namespace Clix\Drivers\Logger\Facades;

use Clix\Drivers\Logger\LoggerInterface;

class Laravel implements LoggerInterface
{
       /**
     * Logs an Info Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logInfo($message)
    {
        \Log::info($message);
    }

    /**
     * Logs a Notice Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logNotice($message)
    {
        \Log::notice($message);
    }

    /**
     * Logs a Warning Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logWarning($message)
    {
        \Log::warning($message);
    }

    /**
     * Logs a Error Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logError($message)
    {
        \Log::error($message);
    }

    /**
     * Logs a Critical Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logCritical($message)
    {
        \Log::critical($message);
    }

    /**
     * Logs a Alert Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logAlert($message)
    {
        \Log::alert($message);
    }

    /**
     * Logs a Debug Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logDebug($message)
    {
        \Log::debug($message);
    }
}