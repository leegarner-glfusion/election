<?php
/**
 * Define date constants.
 *
 * @author      Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (c) 2021 Lee Garner <lee@leegarner.com>
 * @package     elections
 * @version     v0.1.0
 * @since       v0.1.0
 * @license     http://opensource.org/licenses/gpl-2.0.php
 *              GNU Public License v2 or later
 * @filesource
 */
namespace Elections\Models;


/**
 * Constants for minimum and maximum dates & times.
 * @package elections
 */
class Dates
{
    /** Minimum possible date value.
     */
    public const MIN_DATE = '1970-01-01';

    /** Maximum possible date value.
     */
    public const MAX_DATE = '2037-12-31';

    /** Maximum possible Unix date, where timestamps are used.
     */
    public const MAX_UNIXDATE = '2037-12-31';

    /** Minumum time value (midnight).
     */
    public const MIN_TIME = '00:00:00';

    /** Maximum time value (one second before midnight).
     */
    public const MAX_TIME = '23:59:59';

    /** DateTime format including timezone.
     */
    public const FMT_DATETIME = 'Y-m-d H:i:s T';

    /** Full date format: Month Day, Year.
     */
    public const FMT_FULLDATE = 'F j, Y';

    public static function minDateTime()
    {
        return self::MIN_DATE . ' ' . self::MIN_TIME;
    }

    public static function maxDateTime()
    {
        return self::MAX_DATE . ' ' . self::MAX_TIME;
    }

}
