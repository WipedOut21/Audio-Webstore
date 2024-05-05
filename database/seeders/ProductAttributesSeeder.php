<?php

namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'product_dimensions',
            'value' => '26.92 x 22.35 x 9.91 cm; 1.15 kg',
            'key_title' => 'Product Dimensions'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'manufacturer_date',
            'value' => '24 January 2024',
            'key_title' => 'Manufacture Date'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'manufacturer_name',
            'value' => 'Sennheiser',
            'key_title' => 'Manufacturer'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'country_origin',
            'value' => 'Romania',
            'key_title' => 'Country of origin'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'model_number',
            'value' => '700287',
            'key_title' => 'Item Model Number'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'type',
            'value' => 'Over-Ear',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'impedance',
            'value' => '32 Ohms',
            'key_title' => 'Impedance'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'frequency_response',
            'value' => '12 Hz - 38 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'cable_length',
            'value' => '2.5 meters',
            'key_title' => 'Cable Length'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 1,
            'key' => 'weight',
            'value' => '280 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 2,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 2,
            'key' => 'type',
            'value' => 'Over-Ear',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 2,
            'key' => 'impedance',
            'value' => '64 Ohms',
            'key_title' => 'Impedance'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 2,
            'key' => 'frequency_response',
            'value' => '8 Hz - 25 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 2,
            'key' => 'cable_length',
            'value' => '3 meters',
            'key_title' => 'Cable Length'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 2,
            'key' => 'weight',
            'value' => '285 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 3,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 3,
            'key' => 'type',
            'value' => 'Over-Ear',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 3,
            'key' => 'impedance',
            'value' => '32 Ohms',
            'key_title' => 'Impedance'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 3,
            'key' => 'frequency_response',
            'value' => '20 Hz - 20 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 3,
            'key' => 'cable_length',
            'value' => '3 meters',
            'key_title' => 'Cable Length'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 3,
            'key' => 'weight',
            'value' => '250 grams',
            'key_title' => 'Weight'
        ]);


        ProductAttribute::factory()->create([
            'product_id' => 4,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 4,
            'key' => 'type',
            'value' => 'Over-Ear',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 4,
            'key' => 'impedance',
            'value' => '64 Ohms',
            'key_title' => 'Impedance'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 4,
            'key' => 'frequency_response',
            'value' => '6 Hz - 25 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 4,
            'key' => 'cable_length',
            'value' => '3 meters',
            'key_title' => 'Cable Length'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 4,
            'key' => 'weight',
            'value' => '260 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 5,
            'key' => 'type',
            'value' => 'Microphone',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 5,
            'key' => 'polar_pattern',
            'value' => 'Supercardioid',
            'key_title' => 'Polar Pattern'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 5,
            'key' => 'frequency_response',
            'value' => '30 Hz - 50 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 5,
            'key' => 'sensitivity',
            'value' => '-35 dBV/Pa',
            'key_title' => 'Sensitivity'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 5,
            'key' => 'connector_type',
            'value' => 'XLR',
            'key_title' => 'Connector Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 5,
            'key' => 'weight',
            'value' => '82 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 6,
            'key' => 'type',
            'value' => 'Microphone',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 6,
            'key' => 'polar_pattern',
            'value' => 'Cardioid',
            'key_title' => 'Polar Pattern'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 6,
            'key' => 'frequency_response',
            'value' => '20 Hz - 20 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 6,
            'key' => 'connector_type',
            'value' => 'USB',
            'key_title' => 'Connector Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 6,
            'key' => 'compatibility',
            'value' => 'Windows, Mac',
            'key_title' => 'Compatibility'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 6,
            'key' => 'weight',
            'value' => '200 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 7,
            'key' => 'type',
            'value' => 'Microphone',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 7,
            'key' => 'polar_pattern',
            'value' => 'Cardioid',
            'key_title' => 'Polar Pattern'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 7,
            'key' => 'frequency_response',
            'value' => '40 Hz - 16 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 7,
            'key' => 'connector_type',
            'value' => 'XLR',
            'key_title' => 'Connector Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 7,
            'key' => 'sensitivity',
            'value' => '-52 dBV/Pa',
            'key_title' => 'Sensitivity'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 7,
            'key' => 'weight',
            'value' => '330 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 8,
            'key' => 'type',
            'value' => 'Headset Microphone',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 8,
            'key' => 'polar_pattern',
            'value' => 'Omnidirectional',
            'key_title' => 'Polar Pattern'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 8,
            'key' => 'frequency_response',
            'value' => '20 Hz - 20 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 8,
            'key' => 'connector_type',
            'value' => 'Mini-jack',
            'key_title' => 'Connector Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 8,
            'key' => 'cable_length',
            'value' => '1.5 meters',
            'key_title' => 'Cable Length'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 8,
            'key' => 'weight',
            'value' => '22 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 9,
            'key' => 'type',
            'value' => 'Wireless System',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 9,
            'key' => 'frequency_range',
            'value' => '470 MHz - 608 MHz',
            'key_title' => 'Frequency Range'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 9,
            'key' => 'transmitter_type',
            'value' => 'Bodypack',
            'key_title' => 'Transmitter Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 9,
            'key' => 'receiver_type',
            'value' => 'Portable Receiver',
            'key_title' => 'Receiver Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 9,
            'key' => 'operating_range',
            'value' => '100 meters',
            'key_title' => 'Operating Range'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 9,
            'key' => 'weight',
            'value' => '200 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 10,
            'key' => 'type',
            'value' => 'Wireless Microphone',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 10,
            'key' => 'frequency_range',
            'value' => '470 MHz - 608 MHz',
            'key_title' => 'Frequency Range'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 10,
            'key' => 'transmitter_type',
            'value' => 'Handheld',
            'key_title' => 'Transmitter Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 10,
            'key' => 'receiver_type',
            'value' => 'Rackmount Receiver',
            'key_title' => 'Receiver Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 10,
            'key' => 'operating_range',
            'value' => '150 meters',
            'key_title' => 'Operating Range'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 10,
            'key' => 'weight',
            'value' => '350 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 11,
            'key' => 'type',
            'value' => 'Studio Microphone',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 11,
            'key' => 'polar_pattern',
            'value' => 'Multi-pattern (Cardioid, Figure-8, Omnidirectional)',
            'key_title' => 'Polar Pattern'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 11,
            'key' => 'frequency_response',
            'value' => '20 Hz - 20 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 11,
            'key' => 'connector_type',
            'value' => 'XLR',
            'key_title' => 'Connector Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 11,
            'key' => 'sensitivity',
            'value' => '-36 dBV/Pa',
            'key_title' => 'Sensitivity'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 11,
            'key' => 'weight',
            'value' => '860 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 12,
            'key' => 'type',
            'value' => 'Battery Charger',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 12,
            'key' => 'compatibility',
            'value' => 'Sennheiser Wireless Microphones',
            'key_title' => 'Compatibility'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 12,
            'key' => 'input_voltage',
            'value' => '100-240V AC',
            'key_title' => 'Input Voltage'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 12,
            'key' => 'output_voltage',
            'value' => '5V DC',
            'key_title' => 'Output Voltage'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 12,
            'key' => 'charging_slots',
            'value' => '2',
            'key_title' => 'Charging Slots'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 12,
            'key' => 'weight',
            'value' => '150 grams',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 13,
            'key' => 'type',
            'value' => 'Portable Speaker',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 13,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 13,
            'key' => 'connectivity',
            'value' => 'Bluetooth, AUX, USB',
            'key_title' => 'Connectivity'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 13,
            'key' => 'power_output',
            'value' => '240W RMS',
            'key_title' => 'Power Output'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 13,
            'key' => 'battery_life',
            'value' => 'Up to 18 hours',
            'key_title' => 'Battery Life'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 13,
            'key' => 'weight',
            'value' => '15.5 kg',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 14,
            'key' => 'type',
            'value' => 'Bluetooth Speaker',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 14,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 14,
            'key' => 'connectivity',
            'value' => 'Bluetooth, AUX',
            'key_title' => 'Connectivity'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 14,
            'key' => 'battery_life',
            'value' => 'Up to 12 hours',
            'key_title' => 'Battery Life'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 14,
            'key' => 'waterproof',
            'value' => 'Yes (IP67)',
            'key_title' => 'Waterproof'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 14,
            'key' => 'weight',
            'value' => '0.5 kg',
            'key_title' => 'Weight'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 15,
            'key' => 'type',
            'value' => 'Subwoofer',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 15,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 15,
            'key' => 'connectivity',
            'value' => 'Wireless',
            'key_title' => 'Connectivity'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 15,
            'key' => 'power_output',
            'value' => '300W',
            'key_title' => 'Power Output'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 15,
            'key' => 'frequency_response',
            'value' => '30 Hz - 200 Hz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => 15,
            'key' => 'weight',
            'value' => '5.7 kg',
            'key_title' => 'Weight'
        ]);

        $this->lazy_add(16);
        $this->lazy_add(17);
        $this->lazy_add(18);
        $this->lazy_add(19);
        $this->lazy_add(20);
    }

    private function lazy_add(int $product_id)
    {
        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'product_dimensions',
            'value' => '26.92 x 22.35 x 9.91 cm; 1.15 kg',
            'key_title' => 'Product Dimensions'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'manufacturer_date',
            'value' => '24 January 2024',
            'key_title' => 'Manufacture Date'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'country_origin',
            'value' => 'Romania',
            'key_title' => 'Country of origin'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'model_number',
            'value' => '700287',
            'key_title' => 'Item Model Number'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'color',
            'value' => 'Black',
            'key_title' => 'Color'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'type',
            'value' => 'Over-Ear',
            'key_title' => 'Type'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'impedance',
            'value' => '32 Ohms',
            'key_title' => 'Impedance'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'frequency_response',
            'value' => '12 Hz - 38 kHz',
            'key_title' => 'Frequency Response'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'cable_length',
            'value' => '2.5 meters',
            'key_title' => 'Cable Length'
        ]);

        ProductAttribute::factory()->create([
            'product_id' => $product_id,
            'key' => 'weight',
            'value' => '280 grams',
            'key_title' => 'Weight'
        ]);
    }
}
