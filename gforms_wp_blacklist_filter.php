/*Gravity Forms Filter to Use WP 'Comment Blacklist' as Validation Parameter*/
add_filter( 'gform_validation', 'custom_validation' );
function custom_validation( $validation_result ) {
    if ( false === get_option( 'disallowed_keys' ) ) {
    // Assume this is WP < 5.5. Option does not exist.
		$blacklisted = get_option('blacklist_keys');
		} else {
	// Assume this is WP >= 5.5
		$blacklisted = get_option('disallowed_keys');
	}
	//Turn WP Blacklist Words into Array
	$badWords = preg_split("/[\s,]+/", $blacklisted);
	//Function to Check Submitted Field Value Against Blacklist Array. Will be Called in the Fields Loop.
	function contains($field_value, array $badWords){
		foreach($badWords as $i) {
			if (stripos($field_value,$i) !== false)return true;
		}
			return false;
	}

    $form = $validation_result['form'];
        //Loop through Form Fields
        foreach( $form['fields'] as &$field ) {
            //Store Submitted Field Value in a Local Variable
			$field_value = rgpost( "input_{$field['id']}" );
			//Use Function
            if (contains($field_value, $badWords)){
				// set the form validation to false
				$validation_result['is_valid'] = false;
                $field->failed_validation = true;
                $field->validation_message = 'This field contains bad words!';
                break;
			}
			else {
				continue;
			}
        }
 
    //Assign modified $form object back to the validation result
    $validation_result['form'] = $form;
    return $validation_result;
}