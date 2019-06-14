<?php


namespace App\DataFixtures;


use App\Entity\Seller;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SellerFixtures extends Fixture
{
    const PRODUCT_SELLER_REFERENCE = 'product-seller';

    public function load(ObjectManager $manager)
    {
        #Seller1
        $seller = new Seller();
        $seller->setFirstName("Igor")
                ->setLastName("x")
                ->setDescription("grincheux")
                ->setPicture("1.jpeg")
                ->setAddress("rue tintin")
                ->setCity("Dnipropetrovsk")
                ->setZipCode("11111")
                ->setLocalisation("48.862725;2.287592000000018");
        $manager->persist($seller);

        #Seller1
        $seller = new Seller();
        $seller->setFirstName("Vladimir")
            ->setLastName("y")
            ->setDescription("courageux")
            ->setPicture("2.jpeg")
            ->setAddress("rue milou")
            ->setCity("Donetsk")
            ->setZipCode("22222")
            ->setLocalisation("51.862725;5.287592004444018");
        $manager->persist($seller);

        #Seller1
        $seller = new Seller();
        $seller->setFirstName("Boris")
            ->setLastName("z")
            ->setDescription("souriant")
            ->setPicture("3.jpeg")
            ->setAddress("rue haddock")
            ->setCity("Jytomyr")
            ->setZipCode("33333")
            ->setLocalisation("38.862725;2.456592000000018");
        $manager->persist($seller);

        #Seller1
        $seller = new Seller();
        $seller->setFirstName("Gregor")
            ->setLastName("l")
            ->setDescription("triste")
            ->setPicture("4.jpeg")
            ->setAddress("rue tournesol")
            ->setCity("Kiev")
            ->setZipCode("44444")
            ->setLocalisation("67.862725;8.287567000000018");
        $manager->persist($seller);
        $manager->flush();

        $this->addReference(self::PRODUCT_SELLER_REFERENCE, $seller);
    }
}