<?php
/**
 * @file
 * Theme implementation to display day cell.
 *
 * Variables:
 * - $calendar_mode: Display mode (simple or full)
 * - $day_number: Day number from beginning of month
 * - $day_content: Simple listing of events for the day, if in full mode, or
 *   empty if in simple mode (or if there are no events).
 * - $delta: Day number from beginning of week
 * - $wrapper_class: Default wrapper classes (string)
 * - $popup_path: Path to popup view
 * - $link_path: Path to day view
 * - $link_class: Default link classes (string)
 * - $link_title: Title attribute for link
 * - $link_dialog: Boolean to indicate if this link should open in a dialog
 * - $link_dialog_options: Link dialog options (JSON)
 * - $count: Node count; 0 if empty.
 *
 */
?>

<div class="<?php print $wrapper_class; ?>">
  <?php if ($count && (!$link_dialog || $calendar_mode == 'full')) : ?>
    <a href="<?php print $link_path; ?>" title="<?php print $link_title; ?>" class="<?php print $link_class; ?> pretty-calendar--link__link">
      <div class="pretty-calendar--value">
        <?php print $day_number; ?>
      </div>
    </a>
  <?php endif; ?>
  <?php if ($link_dialog && $count) : ?>
    <a href="<?php print $popup_path; ?>" title="<?php print $link_title; ?>" class="<?php print $link_class; ?> pretty-calendar--link__popup use-ajax" data-dialog="true" data-dialog-options=<?php print $link_dialog_options; ?>>
      <div class="pretty-calendar--value">
            <?php print $day_number; ?>
      </div>
    </a>
  <?php elseif (!$count) : ?>
    <div class="pretty-calendar--value">
      <?php print $day_number; ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($day_content)) : ?>
    <div class="pretty-calendar--day-content">
      <?php print $day_content; ?>
    </div>
  <?php endif; ?>
</div>
