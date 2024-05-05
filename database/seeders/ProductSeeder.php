<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedCategories();
        $this->seedProducts();
        $this->seedMicrophones();
        $this->seedAccessories();
        $this->seedSpeakers();
    }

    /**
     * @return void
     */
    public function seedCategories(): void
    {
        Category::factory()->create(['title' => 'Headphones']);

        Category::factory()->create(['title' => 'Microphones']);

        Category::factory()->create(['title' => 'Accessories']);

        Category::factory()->create(['title' => 'Amplifiers']);

        Category::factory()->create(['title' => 'Speakers']);
    }

    /**
     * @return void
     */
    public function seedProducts(): void
    {
        Product::factory()->create([
            'id' => 1,
            'title' => 'Sennheiser HD 490 PRO',
            'description' => 'Handcrafted and German-engineered with built-to-last components and a lightweight, comfortable design, HD 490 PRO lets you feel the music and forget about the headphones. Meticulously engineered ergonomics eliminate pressure points while the open-back design provides natural ventilation, making hours in the music feel like minutes. Two sets of switchable ear pads, each with a unique sound signature for long hours of mixing and producing, eliminate ear fatigue and are designed with sustainability and durability in mind — they’re both washable and replaceable. HD 490 PRO mixing headphones also include the innovative dearVR MIX-SE plugin from Dear Reality, placing you in the “sweet spot” and turning your DAW into an ultimate virtual mixing environment. DearVR MIX-SE simulates the carefully designed acoustics of mixing studios, helping you ensure a balanced, consistent translation of your mix on different systems. HD 490 PRO helps you achieve your full creative vision, eliminating audio blind spots, putting you in full control of every detail, and ensuring accurate playback beyond the studio.',
            'category_id' => 1,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/46000-en-hd_490_pro_product_shot_cutout_isometric_view.png/SennheiserFullWidth',
            'rating' => 4.5,
            'price' => 1599
        ])->save();

        Product::factory()->create([
            'id' => 2,
            'title' => 'Sennheiser HD 280 PRO',
            'description' => "The HD 280 Pro is Sennheiser's most significant closed, around-the-ear headphone to be introduced in years. Designed to exceed the demands of the professional environment, the HD 280 Pro boasts extremely robust construction combined with the sound quality, modular design and aggressive noise isolation that is necessary in the field. The unique collapsible design, combined with swiveling ear cups, offers maximum flexibility in any application.",
            'category_id' => 1,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/38361-en-hd_280_pro_product_shot_cutout_isofront.png.png/SennheiserFullWidth',
            'rating' => 4.0,
            'price' => 379
        ])->save();

        Product::factory()->create([
            'id' => 3,
            'title' => 'Sennheiser HD 200 PRO',
            'description' => "The HD 200 PRO monitoring headphones deliver powerful studio sound wherever you are. Record your own tunes, practice silently, or simply enjoy your favorite music at home – the HD 200 PRO is your ideal companion for monitoring tasks. The HD 200 PRO’s ambient noise attenuation enables you to fully concentrate on your job. Soft ear pads ensure outstanding comfort during long creative sessions (e.g. electronic piano, laptop, mixing consoles).",
            'category_id' => 1,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/38328-en-hd_200_pro_product_shot_cutout_isofront_view.png.png/SennheiserFullWidth',
            'rating' => 3.7,
            'price' => 279
        ])->save();
        Product::factory()->create([
            'id' => 4,
            'title' => 'Sennheiser HD 300 PRO',
            'description' => "**As meticulous as you** The newly developed HD 300 PRO delivers a neutral, high-resolution working sound. Its huge depth of detail passes through even in the loudest of environments. Irrespective of whether you are editing, playing or composing music, and regardless of whether you’re behind a drum kit, at the mixing desk, in a live setting or in the studio, the HD 300 PRO provides the details that you need for making good decisions. HD 300 PRO. Keep control. **Measuring the truth** The HD 300 PRO works at the same level of precision that you apply to your production. To make this possible, we have pushed its acoustic properties to the boundaries of physics and recalculated them. Firstly, it’s linear frequency response. It doesn’t interpret, but rather ensures neutral transparency – the basis for good decisions. Its sound pattern remains delicate and precise in every application – across the entire spectrum. Secondly, we have reduced distortion, wobbling motions and partial vibrations of the diaphragm to a minimum. Together with highly sensitive transducers, this construction guarantees powerful and distortion-free reproduction even at high sound pressure levels. Not to mention the recalculated air volumes in front of the ear. The HD 300 PRO gives the sound a remarkably natural, three-dimensional quality. **Only the sound carries weight.** The design of the HD 300 PRO represents a smart combination of wearing comfort and ambient noise attenuation. Its circumaural, viscoelastic earpads can barely be felt even after several hours. And they provide reliable protection even against very loud ambient noise. To achieve this, we have designed the acoustic unit to be more isolated than a monitoring set has ever been. Even after sessions lasting several hours, you will detect only its sound – not its weight.",
            'category_id' => 1,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/38371-en-hd_300_pro_product_shot_cutout_isofront_view.png.png/SennheiserFullWidth',
            'rating' => 3.8,
            'price' => 453
        ])->save();

        Product::factory()->create([
            'id' => 16,
            'title' => 'Bose QuietComfort 45 SE Noise Cancelling Headphones (Black)',
            'description' => "Introducing the power of our next-gen QuietComfort headphones, now with a best-in-class combination of noise cancelling performance and premium comfort, plus proprietary acoustic technology for deep, clear audio. Bose QuietComfort 45 SE headphones—iconic wireless headphones with the perfect balance of quiet, comfort and sound.",
            'category_id' => 1,
            'image_url' => 'https://www.jbhifi.com.au/cdn/shop/products/664072-Product-0-I-638336108410753512.jpg?v=1698014119',
            'rating' => 4.0,
            'price' => 1100
        ])->save();

        Product::factory()->create([
            'id' => 17,
            'title' => 'Beats Studio 3 Wireless Noise Cancelling Over-Ear Headphones (Matte Black)',
            'description' => "Introducing the Beats Studio Wireless, featuring Pure Adaptive Noise Cancelling (Pure ANC) and the Apple W1 chip.",
            'category_id' => 1,
            'image_url' => 'https://www.jbhifi.com.au/cdn/shop/products/440923-Product-0-I-637229829067984380.jpg?v=1587350174',
            'rating' => 4.1,
            'price' => 853
        ])->save();

        Product::factory()->create([
            'id' => 18,
            'title' => 'Beats Studio Pro ANC Over-Ear Wireless Headphones (Black)',
            'description' => "The Beats Studio Pro custom acoustic platform delivers an immersive listening experience. Each custom 40mm driver has been engineered for optimal clarity, with near-zero distortion even at high volume – an improvement of up to 80% compared to Beats Studio3, providing increased audio fidelity. An integrated digital processor optimises the final frequency response for a powerful, yet balanced sound profile crafted to bring out the subtle details of whatever you’re listening to.",
            'category_id' => 1,
            'image_url' => 'https://www.jbhifi.com.au/cdn/shop/products/640446-Product-0-I-638259204607734188.jpg?v=1691571250',
            'rating' => 4.5,
            'price' => 769
        ])->save();

        Product::factory()->create([
            'id' => 19,
            'title' => 'Sony WH-1000XM4 Wireless Noise Cancelling Over-Ear Headphones (Silver)',
            'description' => "Featuring Sony’s industry-leading Noise Cancelling technology, the WH-1000XM4 pushes the boundaries of wireless headphone technology, to deliver an exceptional audio experience. A refined design promises even better wearing comfort, whilst premium sound is assured, thanks to Sony’s HD Noise Cancelling Processor QN1 and suite of other Sony audio technologies.

Key Features

QN1 HD Noise Cancelling Processor (2nd generation)

30 hours battery life (NC on/ 38 hours NC off)

USB-Type-C™/Quick charge; 10 mins = 5 hours music

‘Speak to Chat’ and (manual) Quick Attention mode

Wearing sensor, music pauses when headphones are removed

Built-in Google Assistant and Amazon Alexa, 360RA and Sony Headphones Connect App

New light-weight design with improved fit and comfort

Adaptive Sound Control with location and activity sensing

Adjustable Ambient Sound modes, including Voice Mode

DSEE-HX Extreme, advanced music upscaling
",
            'category_id' => 1,
            'image_url' => 'https://www.jbhifi.com.au/cdn/shop/products/477062-Product-0-I-637308363068657114_96a5a25c-fdf1-4710-85da-b7dd7673e4b3.jpg?v=1634082010',
            'rating' => 4.5,
            'price' => 800
        ])->save();

        Product::factory()->create([
            'id' => 20,
            'title' => 'JBL Tune 520BT Wireless On-Ear Headphones (Black)',
            'description' => "The JBL Tune 520BT headphones stream powerful JBL Pure Bass sound thanks to the latest 5.3 BT technology. Easy to use, these headphones provide up to 57 hours of pure pleasure and an extra 3 hours of battery with just 5 minutes of charge. Download the free JBL Headphones App and customize your sound through the EQ, while Voice Prompts guide you through the headphones features. Manage calls, sound and volume from the earcup, thanks to the convenient button control. If a call comes in while you are watching a video on another device, the JBL Tune 520BT seamlessly switch to your mobile, so you never miss a call. lightweight and comfortable even after hours of listening, the JBL Tune 520BT headphones fold flat in your backpack to follow you everywhere.",
            'category_id' => 1,
            'image_url' => 'https://www.jbhifi.com.au/cdn/shop/products/659928-Product-0-I-638279247007487060.jpg?v=1692769381',
            'rating' => 3.5,
            'price' => 545
        ])->save();
    }

    public function seedMicrophones(): void
    {
        Product::factory()->create([
            'id' => 5,
            'title' => 'MKH 8030',
            'description' => "Capture what other microphones can’t: The MKH 8030 figure-8 microphone allows recording professionals to capture pristine sound over an extended frequency range in nearly any environment. The MKH 8030 is ideal for M-S, double M-S, and Blumlein stereo recording options or wherever the highest attenuation of neighboring sound sources is required. Like all Sennheiser MKH 8000 series microphones, the MKH 8030 features a symmetrical, acoustically open, push-pull transducer. This remarkable design keeps the sound flow as unrestricted and undistorted as possible, providing a precise polar pattern with minimal off-axis coloration. In combination with a low-tension diaphragm, this design delivers remarkable sensitivity and wide frequency response, so you can capture sound as authentically as possible. Part of a complete series: Based on the renowned dual-capsule technology of Sennheiser’s MKH 800 Twin microphone, the MKH 8000 series is the complete toolkit for audio professionals. The series includes the MKH 8020 omni-directional, MKH 8030 figure-8, MKH 8090 wide cardioid, MKH 8040 cardioid, MKH 8050 super-cardioid, MKH 8060 super-cardioid/lobar, and the MKH 8070 lobar. Durable in harsh environments: Each MKH 8000 microphone features signature Sennheiser build quality with a robust metal housing and rugged construction. Perfect for outdoor applications such as sports broadcasting and wilderness recording excursions, MKH 8000 microphones allow you to head into the field with confidence. They are ideal for use in humid, hot, and cold how environments because the permanent RF current flow at the microphone capsule naturally evaporates moisture. Additionally, the capsule's impedance is much lower than that of moisture, giving MKH 8000 microphones inherent durability and moisture resistance.",
            'category_id' => 2,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/46734-en-mkh_8030_mzx_8000_product_shot_cutout_front.png/SennheiserFullWidth',
            'rating' => 4.1,
            'price' => 500
        ])->save();

        Product::factory()->create([
            'id' => 6,
            'title' => 'Profile USB Microphone',
            'description' => "The Profile USB Microphone is where performance meets accessibility. Featuring a cardioid condenser capsule, this USB-C powered microphone puts audio quality and design above all else. factory()->created for Podcasting and Streaming, the Profile has three fundamental controls; Gain Control to adjust the level of the microphone, Mix Control to balance the microphone with your device audio, and Volume Control to set your headphone monitoring level. The Profile features an adjustable tilt function with a self-locking joint so you can aim the mic directly towards the sound source. Depending on your needs, the Profile includes either a table stand for compact convenience or a boom arm for optimal positioning.",
            'category_id' => 2,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/42315-en-profile_usb_microphone_product_shot_front_with_base_mic-on.png/SennheiserFullWidth',
            'rating' => 5.0,
            'price' => 1200
        ])->save();

        Product::factory()->create([
            'id' => 7,
            'title' => 'e 835',
            'description' => "Lead vocal stage mic, designed to perform under pressure. Uniform frequency pick-up pattern maintains signal quality when moving on and off axis during performance. Gentle presence boost to even tonal response ensures clarity and projection. Minimal proximity effect provides consistently clear bass and performance when singing closer to or farther from capsule. Industry leading 10 year warranty! All parts and labor covered.",
            'category_id' => 2,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/42274-en-e_835_product_shot_cutout_front_view.png/SennheiserFullWidth',
            'rating' => 3.5,
            'price' => 375
        ])->save();

        Product::factory()->create([
            'id' => 8,
            'title' => 'Headmic 4',
            'description' => "High-quality, permanently polarized condenser headmic with cardioid pick-up pattern, designed for professional applications. The adjustable neckband is visually unobtrusive and comfortable to wear. This ultra-lightweight (7 g) yet robust headmic features a KE 4 cardioid mic capsule, comes with two connector options (3.5 mm jack and 3-pin) and is available in 3 color variants (black, beige and silver). It is compatible with all Sennheiser bodypack transmitters.",
            'category_id' => 2,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/45977-en-piccolo_beige_w_cable_3_5_mm_jack_plugged.png/SennheiserFullWidth',
            'rating' => 3.0,
            'price' => 100
        ])->save();
    }

    public function seedAccessories()
    {
        Product::factory()->create([
            'id' => 9,
            'title' => 'EW-D AB (Q)',
            'description' => "Antenna Booster for use with Evolution Wireless Digital systems. Versatile and feature-rich digital wireless system for those who sing, speak or play instruments that allows for seamless product pairing and management via the EW-D Smart Assist App. Receive state-of-the-art live sound.",
            'category_id' => 3,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/42236-en-evolution_wireless_digital_ab_antenna_booster_front_set_rgb_red.png/SennheiserFullWidth',
            'rating' => 4.0,
            'price' => 50
        ])->save();
        Product::factory()->create([
            'id' => 10,
            'title' => 'A 3700',
            'description' => "Omnidirectional antenna with integrated AB3700 for EM 3731/3732, EM 2000/2050 and EM 6000 receivers only.",
            'category_id' => 3,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/44563-en-square_louped_a_3700-sq01-sennheiser.png/SennheiserFullWidth',
            'rating' => 4.0,
            'price' => 35
        ])->save();
        Product::factory()->create([
            'id' => 11,
            'title' => 'NT 2-3-EU',
            'description' => "Plug-in mains unit with country-specific adaptor for stationary receivers and transmitters of evolution wireless G3 series",
            'category_id' => 3,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/44531-en-nt_2-3_01_sq_accessory_sennheiser.png/SennheiserFullWidth',
            'rating' => 3.2,
            'price' => 29
        ])->save();
        Product::factory()->create([
            'id' => 12,
            'title' => 'CHG 2 EU',
            'description' => "2-bay table top charger with power supply for SpeechLine. The CHG 2 charger makes battery management really easy. The mobile transmitters, while not in use, are charged in the two charging bays. Thus, the devices are always ready-to-use when needed. The bi-color LED provides the status (charging or fully charged). For seamless installation, the external power supply provides the necessary flexibility.",
            'category_id' => 3,
            'image_url' => 'https://www.sennheiser.com/globalassets/digizuite/38180-en-evolution_wireless_d1_me_3_chg_2.png.png/SennheiserFullWidth',
            'rating' => 3.7,
            'price' => 15
        ])->save();

    }

    /**
     * @return void
     */
    public function seedSpeakers(): void
    {
        Product::factory()->create([
            'id' => 13,
            'title' => 'JBL PartyBox 310 Bluetooth Portable Speaker (Black)',
            'description' => "Take your karaoke parties to the next level with the JBL PartyBox 310. This mobile entertainment machine is designed to perform anywhere and everywhere your music takes you. Built-in mic and guitar inputs, perfect for live performances, while a dynamic light show, cool vocal effects and 240 watts of JBL Pro Sound make you look and sound like a rock star.  With Bluetooth connectivity and 18 hours of battery life, the entertainment options are endless. Bring life to the party with the JBL PartyBox 310.",
            'category_id' => 5,
            'image_url' => '//www.jbhifi.com.au/cdn/shop/products/512181-Product-0-I-637493251748261110_e3076ddd-9b32-4c8e-b896-461198b5868c.jpg?v=1613689208',
            'rating' => 4.2,
            'price' => 3400
        ])->save();
        Product::factory()->create([
            'id' => 14,
            'title' => 'Bose SoundLink Flex Bluetooth Speaker (Black)',
            'description' => "The SoundLink Flex Bluetooth® speaker is engineered to deliver clear, deep sound that’s powerful enough to fill a room and loud enough for outdoor adventures. No matter the orientation, PositionIQ™ technology optimizes the sound. The SoundLink Flex has a sophisticated, inviting aesthetic and an industrial design that blends durability, portability, and utility. With its silicone body, powder-coated steel grille, and reliable utility loop, SoundLink Flex goes where you go and plays like you play. Listen to music while hiking, camping, or paddleboarding — even while taking a shower or enjoying a sunset on the patio. Its highly durable materials allow it to withstand the elements and mishaps — from drops to shocks. Its utility loop can attach to a clip or carabiner, so you can hang it almost anywhere. And the speaker’s been rigorously tested to meet an IP67 rating, which means it’s waterproof and dustproof. Dunk it in water or leave it in the rain, and it'll keep on playing. SoundLink Flex also has a long-lasting battery life, offering up to 12 hours of unplugged play time per charge. For even more immersive sound, pair your Soundlink Flex with another Bose Bluetooth speaker, or connect it to a Bose smart speaker to extend your listening experience from inside the home to outside.",
            'category_id' => 5,
            'image_url' => '//www.jbhifi.com.au/cdn/shop/products/584210-Product-0-I-637813768180250249.jpg?v=1656039953',
            'rating' => 4.0,
            'price' => 1200
        ])->save();
        Product::factory()->create([
            'id' => 15,
            'title' => 'Bose Bass Module 500',
            'description' => "The Bose Soundbar 500 is a great start, but if you’re looking to amp up the performance, just add the Bose Bass Module 500. Designed for the Bose Soundbar 500, the Bose Bass Module 500 takes your music, movies and more to a whole new level. It’s thunderous bass in a compact, 25-centimetre cube with wireless connectivity—making it easy to hide, but even easier to hear. Who says you need a big box for big bass? Not us.",
            'category_id' => 5,
            'image_url' => '//www.jbhifi.com.au/cdn/shop/products/340331-Product-0-I_079c8b69-555d-43df-b907-8efe97b00f9b.jpg?v=1679645191',
            'rating' => 4.5,
            'price' => 2653
        ])->save();
    }
}
