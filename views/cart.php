<?php
	
	$html = '<div id="show_cart">';
	
	if($this->cart->contents())
	{
		$html .= form_open('/store/update_cart/');
		$html .= form_hidden('redirect', current_url());
		
		$html .= '	<div id="cart_header">';
		$html .= '		<div id="cart_header_qty">QTY</div>';
		$html .= '		<div id="cart_header_name">Item Description</div>';
		$html .= '		<div id="cart_header_price">Item Price</div>';
		$html .= '		<div id="cart_header_subtotal">Sub-Total</div>';
		$html .= '	</div>';
		
		$i=1;
		foreach($this->cart->contents() as $items)
		{
			$html .= '	'.form_hidden($i.'[rowid]', $items['rowid']);
			$html .= '	<div class="cart_items">';
			$html .= '		<div class="cart_item_qty">'.form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')).'</div>';
			$html .= '		<div class="cart_item_name">'.$items['name'];
			$html .= '			<div class="cart_item_name_options">';
			
			if ($this->cart->has_options($items['rowid']) == TRUE)
			{
				$html .= '				<ul class="options_list">';
				foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value)
				{
					$html .= '					<li class="options_item">';
					$html .= '						<div class="options_item_name">'.$option_name.':&nbsp;&nbsp;</div>';
					$html .= '						<div class="options_item_value">'.$option_value.'</div>';
					$html .= '					</li>';
				}
				$html .= '				</ul>';
			}
			
			$html .= '			</div>';
			$html .= '		</div>';
			$html .= '		<div class="cart_item_price">'.$this->cart->format_number($items['price']).'</div>';
			$html .= '		<div class="cart_item_subtotal">'.$this->cart->format_number($items['subtotal']).'</div>';
			$html .= '	</div>';
		}
		$html .= '	<div id="cart_footer">';
		$html .= '		<div id="cart_footer">&nbsp;</div>';
		$html .= '		<div id="cart_footer_">&nbsp;</div>';
		$html .= '		<div id="cart_footer_label_total">Total</div>';
		$html .= '		<div id="cart_footer_text_total">'.$this->cart->format_number($this->cart->total()).'</div>';
		$html .= '	</div>';
		
		$html .= '	<div id="cart_controls">';
		$html .= '		'.anchor('https://paypal.com','Paypal','class="button" id="cart_control_paypal"');
		$html .= '		'.form_submit('', 'Update your Cart','id="cart_control_update"');
		$html .= '	</div>';
		
		$html .= form_close();
	}
	else
	{
		$html .= 'empty';
	}
	
	$html .= '</div>';
	
	print $html;
?>