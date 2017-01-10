## Introduction

這是 git bisect 指令的參考範例，相關實作測試流程可以參考一下說明。

## Requirement

1. PHP 7.0 以上
2. Composer

## Installation

* Step 1. 安裝

```sh
git clone git@github.com:mouson/20170110-demo-bisect.git demo-bisect
cd demo-bisect
composer install --prefer-dist
```

* Step 2. 執行第一次測試，應發生測試錯誤

```sh
./vendor/bin/phpunit
```

## 手動 git bisect 測試

* Step 1. 啟用二分法測試，執行後應跳到目前 HEAD 與 v2.0 這個版本間的 commit

```sh
git bisect start HEAD v2.0
```

* Step 2. 執行 phpunit 出現錯誤，設定目前 commit 為錯誤

```sh
./vendor/bin/phpunit
git bisect bad
```

* Step 3. 執行 phpunit 通過測試，設定目前 commit 為正確

```sh
./vendor/bin/phpunit
git bisect good
```

* Step 4. 執行 phpunit 通過測試，設定目前 commit 為正確

```sh
./vendor/bin/phpunit
git bisect good
```

* Step 5. 執行 phpunit 出現錯誤，此為發生問題的 commit，重置回到 master HEAD

```sh
git bisect reset
```

> ps. 可以透過 tig 指令或 source 查看錯誤的原因並且找到造成錯誤的點

## 自動動 git bisect 測試

* Step 1. 啟用二分法測試
```sh
git bisect start HEAD v2.0
```

* Step 2. 執行自動化測試，並找到錯誤的 commit

```sh
git bisect run ./vendor/bin/phpunit
```

* Step 3. 執行 phpunit 出現錯誤，此為發生問題的 commit，重置回到 master HEAD

```sh
git bisect reset
```

## 相關參考文件：

1. [Git \- 使用 Git 做 Debug](https://git-scm.com/book/zh-tw/v1/Git-%E5%B7%A5%E5%85%B7-%E4%BD%BF%E7%94%A8-Git-%E5%81%9A-Debug)

