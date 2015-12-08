<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoriesControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->visit('/auth/login')
            //->type('tomekskiba79@gmail.com', 'email')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            //->type('ttttttt', 'password')
            ->press('Login');
    }

    /**
     * Verifies following:
     *  - Proper injection of the index view
     *  - Whether categories variable is passed in with the view
     *  - Additionally, checks if and the value of categories is an instance of the of Laravel's Illuminate\Database\Eloquent\Collection class
     */
    public function testViewInjection()
    {
        $response = $this->call('GET', 'categories');
        $this->assertViewHas('categories');
        $categories = $response->original->getData()['categories'];
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $categories);
    }

    /**
     * Test if creation of new category is successful
     */
    public function testCreateCategory() {
        $this->visit('/categories')
            ->see('Create Category [+]')
            ->click('Create Category [+]')
            ->type('Category test', 'name')
            ->type('category_test', 'slug')
            ->press('Create Category')
            ->see('Category created');
    }

    /**
     * Test if validation of the create new category form works properly
     */
    public function testCreateCategoryFormValidation() {
        $this->visit('/categories/create')
            ->type('', 'name')
            ->type('', 'slug')
            ->press('Create Category')
            ->see('The name field is required.')
            ->see('The slug field is required.')
            ->type('n', 'name')
            ->type('n', 'slug')
            ->press('Create Category')
            ->see('The name must be at least 3 characters.');
    }

    /**
     * Test editing of existing category
     */
    public function testEditCategory() {
        $this->visit('/categories/category_test/edit')
        //$this->click('edit_category_test')
            ->see('Edit Category')
            ->type('Category test 2', 'name')
            ->type('category_test', 'slug')
            ->press('Edit Category')
            ->seePageIs('/categories/category_test')
            ->see('Project updated.')
            ->see('Category test 2');
    }

    /**
     * Test if validation of the edit existing category form works properly.
     */
    public function testEditCategoryFormValidation() {
        $this->visit('/categories/category_test/edit')
            ->type('', 'name')
            ->type('', 'slug')
            ->press('Edit Category')
            ->see('The name field is required.')
            ->see('The slug field is required.')
            ->type('n', 'name')
            ->type('n', 'slug')
            ->press('Edit Category')
            ->see('The name must be at least 3 characters.');
    }

    /**
     * Test if deleting category works
     */
    public function testDeleteCategory() {
        $this->withoutMiddleware();
        $response = $this->call('DELETE', '/categories/category_test');
        $this->assertEquals(302, $response->getStatusCode());
        $this->notSeeInDatabase('categories', ['slug' => 'category_test', 'name' => 'Category test 2']);
    }

    public function tearDown()
    {
        $this->visit('/dashboard')
            ->click('Hello, test')
            ->click('Logout');

        parent::tearDown();
        Mockery::close();
    }

}
