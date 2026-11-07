# hkm-plugin-school-calendar

> Solves **`school.calendar`** · namespace **`Plugins\SchoolCalendar\`** · on-demand GDA module
> Family: Elimu / school domain

The teacher journal and timetable, school events and countdowns.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolCalendarContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `teacher/_journal_schema.php, schedule, events.php, elimu_events, admin_calendar.php, teacher_phase_schedules` |
| Legacy tables | `schedule, elimu_events, teacher_phase_schedules` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.classes`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.calendar"] }
```

```php
$svc = $container->make(\Plugins\SchoolCalendar\API\Contracts\SchoolCalendarContract::class);
```

## Installing

```bash
hkm plugins enable SchoolCalendar <project>
```
