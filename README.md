# Pretty Calendar

Produces a calendar block that displays content by date, with detail pages
listing all content for a particular date. Includes both a compact sidebar
calendar and a full monthly calendar view. The full calendar can automatically
switch to the compact view on mobile devices, ensuring a clean experience at
any screen size. The date can be selected from content creation time or from a
custom date field.

## Installation

 - Install this module and its dependencies using the official 
  [Backdrop CMS instructions](https://backdropcms.org/guide/modules)

## Configuration and Usage

Settings can be found in the block configuration.

  - **Default calendar themes**:
    - Standard (flexible width)
    - Round (flexible width)
    - Gridy (fixed width - 182px)
    - Vista (fixed width - 192px)

  - **Event headings**: Choose a name for the events that will be displayed in
    the calendar when hovering over a date, such as "12 events." Enter a
    comma-separated words for numbers (e.g. `event, events`).

  - **Link type**: Controls what happens when a person clicks on a date that
    has events. Each block (Simple and Full) has its own independent link type
    setting. Options are:
    - **Modal popup**: Shows a small dialog listing the first few event titles
      with a link to the full listing page. The number of events shown is
      configurable. Recommended for the simple sidebar block.
    - **Link to the listing page**: Navigates to a calendar listing page at
      `/calendar/YYYY/MM/DD` showing all events for that date. Recommended for
      the simple sidebar block when a popup is not desired.
    - **Link directly to the node**: Navigates directly to the first event node
      for that date. Works best when there is typically one event per day.
      Recommended for the full calendar block, where event titles are already
      visible within each day cell.

  - **Separate nodes by language**: For multilingual sites. Nodes can be
    selected in the language in which they were created.
  
  - View and edit more instructions in the 
    [Wiki](https://github.com/backdrop-contrib/pretty_calendar/wiki).

## Upgrading from 1.x-1.x to 1.x-2.x

Version 2.x is a significant rewrite. Sites upgrading from 1.x-1.x should be
aware of the following breaking changes and new features.

**Breaking changes**

- CSS classes have been renamed throughout. Any custom CSS or template
  overrides targeting the old class names (e.g. `.calendar-day`) will need to
  be updated to the new namespaced classes (e.g. `.pretty-calendar--day`).
- The tooltip/popup system has been replaced with a new link type system (see
  **Link type** in the Configuration section). The old "Tooltip type" block
  setting no longer exists.

**New features**

- **Full calendar block**: A new "Pretty Calendar Full" block displays a
  full-width monthly grid with event content embedded directly in each day cell,
  powered by a bundled View.
- **Two display modes**: The original block is now the "simple" mode (compact,
  suitable for sidebars) and the new block is "full" mode (suitable for main
  content areas).
- **Mobile-responsive**: The full calendar block can automatically switch to
  the simple compact view on narrow screens. The breakpoint is configurable per
  block.
- **Link type options**: Each block independently supports modal popup, link to
  listing page, or direct node link. The modal popup now uses a Views-powered
  listing for easier theming.
- **Custom date field support**: Events can be ordered by a date field from the
  Date module or the Repeating Dates module, in addition to node creation date.
- **Sample content sub-module**: A bundled sub-module (`Pretty Calendar Sample
  Content`) can create an Event content type and sample events to help
  demonstrate the calendar during setup.
- **Accessibility improvements**: Screen reader announcements on navigation,
  `aria-haspopup` on modal links, and improved heading hierarchy.
- **Minimal theme**: A new streamlined theme suited for modern sites, alongside
  the retained legacy themes (Standard, Round, Gridy, Vista).
- **Timezone fixes**: Corrected timezone offset handling in day and month
  calculations.

## Issues

Bugs and Feature requests should be reported in the 
[Issue Queue](https://github.com/backdrop-contrib/pretty_calendar/issues)

## Current Maintainers

 - [Laryn Kragt Bakker](https://github.com/laryn) - [CEDC.org](https://cedc.org)
 - [Tim Erickson](https://github.com/stpaultim) - [Simplo](https://simplo.site)
 - Co-maintainers wanted

## Credits

 - Ported to Backdrop CMS by [Laryn Kragt Bakker](https://github.com/laryn) - [CEDC.org](https://cedc.org)
 - Originally developed for Drupal 7 by [Dmitriy Makeev](https://www.drupal.org/user/1302446).

## License

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.
