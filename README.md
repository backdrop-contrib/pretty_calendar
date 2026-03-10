# Pretty Calendar

Produces a simple calendar block that displays content by date, as well as
calendar detail pages to display all content for a particular date. The date
can be selected from content creation time or from a custom date field.

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
