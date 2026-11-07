<?php

declare(strict_types=1);

namespace Plugins\SchoolCalendar\API\Contracts;

/**
 * Published contract for `school.calendar`.
 *
 * The teacher journal and timetable, school events and countdowns.
 *
 * Legacy source : teacher/_journal_schema.php, schedule, events.php, elimu_events, admin_calendar.php, teacher_phase_schedules
 * Legacy tables : schedule, elimu_events, teacher_phase_schedules
 *
 * Consumers declare `"requires": ["school.calendar"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolCalendarContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
