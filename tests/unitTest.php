
<?php
require("mesFonctions.php");
use PHPUnit\Framework\TestCase;

class test extends TestCase
{
    /**
     * @tests
     */
    function getAllContacts()
    {
            $Resultat = getAllContacts();
        $this->assertNotNull($Resultat,'array is null');
    }
    /**
     * @tests
     */
    function getContactIdNull()
    {
        try {
            $Resultat = getContact();
            $this->fail("ca aurait du planter");

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "l'id doit etre existant","c'est la bonne exception id");
        }
    }
    /**
     * @tests
     */
    function getContactIdInvalide()
    {
        try {
            $Resultat = getContact(-1);
            $this->fail("ca aurait du planter");

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "l'id doit etre strictement supperieur a 0","c'est la bonne exception id");
        }
    }

    /**
     * @tests
     */
    function SearchchaineNull()
    {
        try {
            $Resultat = Search();
            $this->fail("ca aurait du planter");

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "la chaine doit etre differente de null","c'est la bonne exception de recherche");
        }
    }

    /**
     * @tests
     */
    function AddContactnometprenominvalide()
    {
        try {
            $Resultat = AddContact('','',0);

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "le nom et le prenom doivent etre renseigner obligatoirement !!!","c'est la bonne exception de nom et prenom");
        }
    }
    /**
     * @tests
     */
    function AddContactprenominvalide()
    {
        try {
            $Resultat = AddContact('xyz','',0);

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "le prenom doit etre renseigner obligatoirement !!!","c'est la bonne exception de nom et prenom");
        }
    }
    /**
     * @tests
     */
    function AddContactnominvalide()
    {
        try {
            $Resultat = AddContact('','xyz',0);

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "le nom  doit etre renseigner obligatoirement !!!","c'est la bonne exception de nom et prenom");
        }
    }
    /**
     * @tests
     */
    function UpdateContactnometprenominvalide()
    {
        try {
            $Resultat = UpdateContact(1,'','',0);

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "le nom et le prenom doivent etre renseigner obligatoirement !!!","c'est la bonne exception de nom et prenom");
        }
    }
    /**
     * @tests
     */
    function UpdateContactprenominvalide()
    {
        try {
            $Resultat = UpdateContact(1,'xyz','',0);

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "le prenom doit etre renseigner obligatoirement !!!","c'est la bonne exception de nom et prenom");
        }
    }
    /**
     * @tests
     */
    function UpdateContactnominvalide()
    {
        try {
            $Resultat = UpdateContact(1,'','xyz',0);

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "le nom  doit etre renseigner obligatoirement !!!","c'est la bonne exception de nom et prenom");
        }
    }

    /**
     * @tests
     */
    function DeleteContact_IdNull()
    {
        try {
            $Resultat = DeleteContact();

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "l'id doit etre strictement supperieur a 0","c'est la bonne exception id");
        }
    }

}
