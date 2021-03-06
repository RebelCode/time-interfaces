<?php

namespace Dhii\Time;

/**
 * Something that represents a period of time.
 *
 * @since [*next-version*]
 */
interface PeriodInterface extends IntervalInterface
{
    /**
     * Retrieves the start time for this period.
     *
     * @since [*next-version*]
     *
     * @return int|TimeInterface The start time.
     */
    public function getStart();

    /**
     * Retrieves the end time for this period.
     *
     * @since [*next-version*]
     *
     * @return int|TimeInterface The end time.
     */
    public function getEnd();
}
