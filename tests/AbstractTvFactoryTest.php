<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\AbstractPattern\TvManufacturer\{
    TvFactory,
    SonyLcdTv,
    SonyPlasmaTv,
    TvHelper,
    HuwaiSmartTv,
    HuwaiLedTv
};

class AbstractTvFactoryTest extends TestCase {
    use TvHelper;
    /**
    * it should convert the studlycase string to an array
    *
    * @param void
    * @return void
    */
    public function testShouldConvertStudlycaseToArr()
    {
        $arr = $this->splitStudlyCaseToArr('AwesomeName');
        
        $this->assertEquals(2, count($arr));
        $this->assertEquals('Awesome', $arr[0]);
        $this->assertEquals('Name', $arr[1]);
    }
    /**
    * it should return the called class name
    *
    * @param void
    * @return void
    */
    public function testShouldCallTheCalledClassName()
    {   
        $this->assertEquals('AbstractTvFactoryTest', $this->getCalledClassName());
    }
    /**
    * test should create sony lcd tv
    *
    * @param void
    * @return void
    */
    public function testShouldCreateSonyLcdTv()
    {
        $tvFactory = new TvFactory;
        $sonyLcd = $tvFactory->createSonyTv('lcd');

        $this->assertInstanceOf(SonyLcdTv::class, $sonyLcd);
        $this->assertSame('added the lcd screen', $sonyLcd->addScreen());
        $this->assertSame('added the power button option to turn on and off', $sonyLcd->addPowerOption());
        $this->assertSame('Sony Lcd Tv is ready to be shipped', $sonyLcd->make());
    }
    /**
    * test should create sony lcd tv
    *
    * @param void
    * @return void
    */
    public function testShouldCreateSonyPlasmaTv()
    {
        $tvFactory = new TvFactory;
        $sonyPlasma = $tvFactory->createSonyTv('plasma');

        $this->assertInstanceOf(SonyPlasmaTv::class, $sonyPlasma);
        $this->assertEquals('added the plasma screen', $sonyPlasma->addScreen());
        $this->assertEquals('added the power button option to turn on and off', $sonyPlasma->addPowerOption());
        $this->assertEquals('Sony Plasma Tv is ready to be shipped', $sonyPlasma->make());
    }
    /**
    * test should throw error for invalid sony type
    *
    * @param void
    * @return void
    */
    public function testShouldThrowErrorOnInvalidSonyType()
    {
        $this->expectException(\Exception::class);

        $tvFactory = new TvFactory;
        $tvFactory->createSonyTv('blah');
    }
    /**
    * test should create huwai smart tv
    *
    * @param void
    * @return void
    */
    public function testShouldCreateHuwaiSmartTv()
    {
        $tvFactory = new TvFactory;
        $huwaiSmart = $tvFactory->createHuwaiTv('smart');

        $this->assertInstanceOf(HuwaiSmartTv::class, $huwaiSmart);
        $this->assertEquals('added the huwai default plastic screen', $huwaiSmart->addScreen());
        $this->assertEquals('added the power button option to turn on and off and also added the voice power option to turn on and off', $huwaiSmart->addPowerOption());
        $this->assertEquals('Huwai Smart Tv is ready to be shipped', $huwaiSmart->make());
    }
    /**
    * test should create huwai led tv
    *
    * @param void
    * @return void
    */
    public function testShouldCreateHuwaiLedTv()
    {
        $tvFactory = new TvFactory;
        $huwaiLed = $tvFactory->createHuwaiTv('led');

        $this->assertInstanceOf(HuwaiLedTv::class, $huwaiLed);
        $this->assertEquals('added LED screen', $huwaiLed->addScreen());
        $this->assertEquals('added the power button option to turn on and off', $huwaiLed->addPowerOption());
        $this->assertEquals('Huwai Led Tv is ready to be shipped', $huwaiLed->make());
    }
    /**
    * test should throw error for invalid huwai type
    *
    * @param void
    * @return void
    */
    public function testShouldThrowErrorOnInvalidHuwaiType()
    {
        $this->expectException(\Exception::class);

        $tvFactory = new TvFactory;
        $tvFactory->createHuwaiTv('blah');
    }
}