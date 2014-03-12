<?php

namespace Clix\Drivers\Logger;

interface LoggerInterface
{

    /**
     * Logs an Info Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logInfo($message);

    /**
     * Logs a Notice Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logNotice($message);

    /**
     * Logs a Warning Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logWarning($message);

    /**
     * Logs a Error Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logError($message);

    /**
     * Logs a Critical Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logCritical($message);

    /**
     * Logs a Alert Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logAlert($message);

    /**
     * Logs a Debug Message
     *
     * @author Simon Skinner <s.skinner@clix.co.uk>
     * @param  string $message The message to log
     */
    public function logDebug($message);

}