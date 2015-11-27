<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Task;

class TasksControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->visit('/auth/login')
            ->type('test@gmail.com', 'email')
            ->type('testing', 'password')
            ->press('Login');
    }
    /**
     * Test Task Class
     */
    public function testTaskClass() {
        $task=new Task;
        $category=$task->category();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\BelongsTo', $category);
    }
    /**
     * Test create a new task
     */
    public function testCreateTask() {
        $this->visit('/home/category_test/tasks/create')
            ->see('Create Task for Category')
            ->type('Test task', 'name')
            ->type('Task test', 'slug')
            ->type('This is a test task', 'description')
            ->press('Create Task')
            ->seePageIs('/home/category_test')
            ->see('Task created.')
            ->see('Test Task');
    }
    /**
     * Test create invalid name task rules
     */
    public function testCreateInvalidNameTask() {
        $this->visit('/home/category_test/tasks/create')
            ->see('Create Task for Category')
            ->type('Task test', 'slug')
            ->type('This is a test task', 'description')
            ->press('Create Task')
            ->see('The name field is required.');
    }
    /**
     * Test create invalid slug task rules
     */
    public function testCreateInvalidSlugTask() {
        $this->visit('/home/category_test/tasks/create')
            ->see('Create Task for Category')
            ->type('Test task', 'name')
            ->type('This is a test task', 'description')
            ->press('Create Task')
            ->see('The slug field is required.');
    }
    /**
     * Test create invalid description task rules
     */
    public function testCreateInvalidDescriptionTask() {
        $this->visit('/home/category_test/tasks/create')
            ->see('Create Task for Category')
            ->type('Test task', 'name')
            ->type('Task test', 'slug')
            ->press('Create Task')
            ->see('The description field is required.');
    }
    /**
     *  - Below is not working the way I want. Attempting to hit the index method of Task Controller...And to hit the Task class. Cant figure out how to do that....
     */
    public function testViewInjection()
    {
        $response = $this->call('GET', '/home/category_test');
        $this->assertViewHas('category');
        $category = $response->original->getData()['category'];
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Model', $category);
        $tasks=$category->tasks();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\HasMany', $tasks);
    }

    /**
     * Edit the task
     */
    public function testEditTask() {
        $this->visit('/home/category_test/tasks/Task%20test/edit')
            ->see('Edit Task:')
            ->type('This is an edited test task', 'description')
            ->press('Edit Task')
            ->seePageIs('/home/category_test/tasks/Task%20test')
            ->see('Task updated.')
            ->see('Test Task');
    }
    /**
     * Mark Task Completed
     */
    public function testCompletedTask() {
        $this->visit('/home/category_test/tasks/Task%20test/edit')
            ->see('Edit Task:')
            ->check('completed')
            ->press('Edit Task')
            ->seePageIs('/home/category_test/tasks/Task%20test')
            ->see('Task updated.')
            ->see('Test Task');
    }
    /**
     * Delete the task
     */
    public function testDeleteTask() {
        $this->visit('/home/category_test')
            ->see('Test task')
            ->press('Delete')
            ->seePageIs('/home/category_test')
            ->see('Task deleted.');
    }
    public function tearDown()
    {
        $this->visit('/home')
            ->click('Hello, testUser')
            ->click('Logout');

        parent::tearDown();
        Mockery::close();
    }
}