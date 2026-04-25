<?php
require_once('../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$PAGE->set_url(new moodle_url('/local/aeonreports/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_aeonreports'));
$PAGE->set_heading(get_string('reports', 'local_aeonreports'));

echo $OUTPUT->header();
echo html_writer::tag('h2', 'Aeon Reports Dashboard');
echo html_writer::tag('p', 'Welcome to Aeon Reports plugin. This is the main entry point.');
echo $OUTPUT->footer();
