<?php

namespace EE_CLI\Dispatcher;

/**
 * Get the path to a command
 *
 * @param EE_CLI\Dispatcher\Subcommand $command
 * @return string
 */
function get_path( $command ) {
	$path = array();

	do {
		array_unshift( $path, $command->get_name() );
	} while ( $command = $command->get_parent() );

	return $path;
}
