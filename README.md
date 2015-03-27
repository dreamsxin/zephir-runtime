Zephir Runtime
==============

Zephir - Ze(nd Engine) Ph(p) I(nt)r(mediate) - is a high-level language that can be plugged-in into the Zend Engine.
Code is compiled on-the-fly using a JIT compiler (LLVM).

Main features:

* Both dynamic/static typing
* Reduced execution overhead compared with full interpretation
* Restricted procedural programming, promoting OOP
* Memory safety
* Just-In-Time (JIT) compiler

Compiler design goals:

* Multi-pass compilation
* Type speculation/inference
* Allow runtime profile-guided optimizations, pseudo-constant propagation and indirect/virtual function inlining

Get Started
-----------

Phalcon is written in C with platform independence in mind. As a result, Phalcon is available on Microsoft Windows, GNU/Linux, and Mac OS X. You can either download a binary package for the system of your choice or build it from sources.

### Windows

To install Phalcon on Windows:

1. Download [Phalcon for Windows](http://phalconphp.com/en/download/windows)
2. Extract the DLL file and copy it to your PHP extensions directory
3. Edit your php.ini file and add this line: `extension=php_phalcon.dll`
4. Finally, restart your webserver

**Hint:** To ensure that your Phalcon installation was successful, debug with `<?php phpinfo(); ?>` and search for a section mentioning the Phalcon extension.

### Linux/Unix/Mac

On a Unix-based platform you can easily compile and install the extension from sources.

#### Requirements
Prerequisite packages are:

* PHP 5.3.x/5.4.x/5.5.x development resources
* GCC compiler (Linux/Solaris) or Xcode (Mac)

Ubuntu:

```bash
sudo apt-get install php5-dev libpcre3-dev gcc make libllvm-3.5-ocaml-dev
```

Suse:

```bash
sudo zypper install php5-devel gcc make llvm-clang-devel
```

CentOS/Fedora/RHEL

```bash
sudo yum install php-devel pcre-devel gcc make llvm-devel
```

Compilation
-----------

Follow these instructions to generate a binary extension for your platform:

```bash
git clone https://github.com/dreamsxin/runtime.git
cd zephir
sudo ./install
```

Add the extension to your php.ini:

```bash
extension=zephir.so
```

Finally, restart the webserver.

Documentation & Blog
--------------------
* A preliminary documentation can be found [here](http://zephir-lang.com/)
* Official Blog can be found [here](http://blog.zephir-lang.com/)
* Sublime/TextMate highlight-syntax bundle [here](http://github.com/phalcon/zephir-sublime)

License
-------
Zephir is open-sourced software licensed under the MIT License. See the LICENSE file for more information.

Contributing
------------
[See `CONTRIBUTING.md`](https://github.com/phalcon/zephir/blob/master/CONTRIBUTING.md) for details about contributions to this repository.
