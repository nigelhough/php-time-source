# PHP Time Source

A library to abstract the source of time data within a PHP application.

An interface is provided that can be used in classes that depend on time.

### Use Cases

A time source makes classes more testable by having a predictable and mockable time source.

In applications that use the time source consistently you can also do powerful things with mocking dates by setting a
fixed date for integration or behavioural tests or even to run a dynamic version of your application to provide a
consistent demo.

### Implementation

This library comes with two implementations

* System time, where the time source is the PHP system time.
* Fixed, where the class can be instantiated with a fixed time that will always be returned.
