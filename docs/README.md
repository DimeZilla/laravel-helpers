
# Table of Contents

**[Classes](#classes)**
* [\DiamondLaravelHelpers\Handlers\View](#view)
    * public labelizeDBField
* [\DiamondLaravelHelpers\Facades\ViewHelpers](#viewhelpers)
    * protected getFacadeAccessor
* [\DiamondLaravelHelpers\Providers\ViewProvider](#viewprovider)
    * public register
    * public provides

**[Global Functions](#global-functions)**
* [append_to_current_query](#append_to_current_query)
* [debug](#debug)
* [is_collection](#is_collection)
* [view_helpers](#view_helpers)
___

### CLASSES
# View
`\DiamondLaravelHelpers\Handlers\View`

**namespace:** `\DiamondLaravelHelpers\Handlers`

This class contains the actual view helpers.






## **Methods:**
### *public* labelizeDBField

Takes a db field and turns it into something readable in a view

```php
View::labelizeDBField( string $field = &#039;&#039; ): string
```



#### PARAMETERS:

`$field`
  - *type:* **string**
  - *descrption:* argument.description

#### RETURNS: string

so db_field_1 would become &quot;Db Field 1&quot;


# ViewHelpers
`\DiamondLaravelHelpers\Facades\ViewHelpers`

**namespace:** `\DiamondLaravelHelpers\Facades`

Extends the facade class from laravel so that our View helpers can be called
statically.


### **Parent class:** 




## **Methods:**
### *protected* static getFacadeAccessor

Get the registered name of the role Facade

```php
ViewHelpers::getFacadeAccessor(  ): string
```




#### RETURNS: string



# ViewProvider
`\DiamondLaravelHelpers\Providers\ViewProvider`

**namespace:** `\DiamondLaravelHelpers\Providers`

Registers our View handler as a service.


### **Parent class:** 



### **See Also:**
  * \DiamondLaravelHelpers\Providers\DiamondLaravelHelpers\Handlers\View - contains all of the functions that we'll get with this service.
## **Methods:**
### *public* register

Register any application services.

```php
ViewProvider::register(  ): void
```




#### RETURNS: void



___
### *public* provides

register our defered provider name

```php
ViewProvider::provides(  ): array
```




#### RETURNS: array




___

### GLOBAL FUNCTIONS
# append_to_current_query
**namespace:** \

Generates the current url with append query parameters.

```php
function append_to_current_query( string $params = array() ): string
```



#### PARAMETERS:

`$params`
  - *type:* **string**
  - *descrption:* argument.description

#### RETURNS: string


#### **See Also:**
  * https://laracasts.com/discuss/channels/laravel/add-query-string-to-current-url 

# debug
**namespace:** \

Adds a rule to the debugger to check if we are in debug mode before
we log anything.

```php
function debug( string $message = &#039;&#039;, array $data = array() ): void
```



#### PARAMETERS:

`$message`
  - *type:* **string**
  - *descrption:* argument.description

`$data`
  - *type:* **array**
  - *descrption:* argument.description

#### RETURNS: void




# is_collection
**namespace:** \

Simply checks if a variable is a laravel collection

```php
function is_collection( mixed $obj = null ): boolean
```



#### PARAMETERS:

`$obj`
  - *type:* **mixed**
  - *descrption:* argument.description

#### RETURNS: boolean




# view_helpers
**namespace:** \

Gets the ViewHelpers service provider

```php
function view_helpers(  ): \DiamondLaravelHelpers\Handlers\View
```




#### RETURNS: \DiamondLaravelHelpers\Handlers\View





___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___
