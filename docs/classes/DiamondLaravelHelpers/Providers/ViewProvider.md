# ViewProvider
`\DiamondLaravelHelpers\Providers\ViewProvider`

**namespace:** `\DiamondLaravelHelpers\Providers`

Registers our View handler as a service.


### **Parent node:** 



### **See Also:**
  * \DiamondLaravelHelpers\Providers\DiamondLaravelHelpers\Handlers\View - contains all of the functions that we'll get with this service.
## **Properties:**
### *protected* `$defer`
* visibility: protected
* type: boolean 
* default: true

Tells laravel to load this only when we need it.





## **Methods:**
### *public* register

Register any application services.

```php
::register(  ): void
```




#### RETURNS: void



___
### *public* provides

register our defered provider name

```php
::provides(  ): array
```




#### RETURNS: array



___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___
