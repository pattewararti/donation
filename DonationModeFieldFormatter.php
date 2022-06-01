<?

namespace Drupal\donation_mode\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 *
 *
 *
 *
 *@FieldFormatter(
 * id = 'donation_mode_formatter",
 * label = @Translation("Donation Mode"),
 * field_types = {"donation_mode"}
 *)
*/

class DonationModeFieldFormatter extends FormatterBase{
	
	public function viewElements(FieldItemInterface $items, $langcode)
	
	{
		$elements = [];
		foreach($items as $delta => $item){
			$elements[$delta] = array(
			'#type' => 'markup' => $item->mode . ',' . $item->medium,
			
			);
		}
		return $elements;
	}
}