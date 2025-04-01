<?php

// autoload-classmap.php @generated by Strauss

$strauss_src = dirname(__FILE__);

return array(
   'Give\Vendors\StellarWP\Arrays\Arr' => $strauss_src . '/stellarwp/arrays/src/Arrays/Arr.php',
   'Give\Vendors\StellarWP\FieldConditions\Contracts\Condition' => $strauss_src . '/stellarwp/field-conditions/src/Contracts/Condition.php',
   'Give\Vendors\StellarWP\FieldConditions\Contracts\ConditionSet' => $strauss_src . '/stellarwp/field-conditions/src/Contracts/ConditionSet.php',
   'Give\Vendors\StellarWP\FieldConditions\ComplexConditionSet' => $strauss_src . '/stellarwp/field-conditions/src/ComplexConditionSet.php',
   'Give\Vendors\StellarWP\FieldConditions\Concerns\HasConditions' => $strauss_src . '/stellarwp/field-conditions/src/Concerns/HasConditions.php',
   'Give\Vendors\StellarWP\FieldConditions\Concerns\HasLogicalOperator' => $strauss_src . '/stellarwp/field-conditions/src/Concerns/HasLogicalOperator.php',
   'Give\Vendors\StellarWP\FieldConditions\NestedCondition' => $strauss_src . '/stellarwp/field-conditions/src/NestedCondition.php',
   'Give\Vendors\StellarWP\FieldConditions\SimpleConditionSet' => $strauss_src . '/stellarwp/field-conditions/src/SimpleConditionSet.php',
   'Give\Vendors\StellarWP\FieldConditions\FieldCondition' => $strauss_src . '/stellarwp/field-conditions/src/FieldCondition.php',
   'Give\Vendors\StellarWP\FieldConditions\Config' => $strauss_src . '/stellarwp/field-conditions/src/Config.php',
   'Give\Vendors\StellarWP\ContainerContract\ContainerInterface' => $strauss_src . '/stellarwp/container-contract/src/ContainerInterface.php',
   'Give\Vendors\StellarWP\AdminNotices\NotificationsRegistrar' => $strauss_src . '/stellarwp/admin-notices/src/NotificationsRegistrar.php',
   'Give\Vendors\StellarWP\AdminNotices\ValueObjects\UserCapability' => $strauss_src . '/stellarwp/admin-notices/src/ValueObjects/UserCapability.php',
   'Give\Vendors\StellarWP\AdminNotices\ValueObjects\Style' => $strauss_src . '/stellarwp/admin-notices/src/ValueObjects/Style.php',
   'Give\Vendors\StellarWP\AdminNotices\ValueObjects\ScreenCondition' => $strauss_src . '/stellarwp/admin-notices/src/ValueObjects/ScreenCondition.php',
   'Give\Vendors\StellarWP\AdminNotices\ValueObjects\NoticeLocation' => $strauss_src . '/stellarwp/admin-notices/src/ValueObjects/NoticeLocation.php',
   'Give\Vendors\StellarWP\AdminNotices\ValueObjects\NoticeUrgency' => $strauss_src . '/stellarwp/admin-notices/src/ValueObjects/NoticeUrgency.php',
   'Give\Vendors\StellarWP\AdminNotices\ValueObjects\Script' => $strauss_src . '/stellarwp/admin-notices/src/ValueObjects/Script.php',
   'Give\Vendors\StellarWP\AdminNotices\Actions\NoticeShouldRender' => $strauss_src . '/stellarwp/admin-notices/src/Actions/NoticeShouldRender.php',
   'Give\Vendors\StellarWP\AdminNotices\Actions\RenderAdminNotice' => $strauss_src . '/stellarwp/admin-notices/src/Actions/RenderAdminNotice.php',
   'Give\Vendors\StellarWP\AdminNotices\Actions\EnqueueNoticesScriptsAndStyles' => $strauss_src . '/stellarwp/admin-notices/src/Actions/EnqueueNoticesScriptsAndStyles.php',
   'Give\Vendors\StellarWP\AdminNotices\Actions\DisplayNoticesInAdmin' => $strauss_src . '/stellarwp/admin-notices/src/Actions/DisplayNoticesInAdmin.php',
   'Give\Vendors\StellarWP\AdminNotices\Traits\HasNamespace' => $strauss_src . '/stellarwp/admin-notices/src/Traits/HasNamespace.php',
   'Give\Vendors\StellarWP\AdminNotices\Contracts\NotificationsRegistrarInterface' => $strauss_src . '/stellarwp/admin-notices/src/Contracts/NotificationsRegistrarInterface.php',
   'Give\Vendors\StellarWP\AdminNotices\DataTransferObjects\NoticeElementProperties' => $strauss_src . '/stellarwp/admin-notices/src/DataTransferObjects/NoticeElementProperties.php',
   'Give\Vendors\StellarWP\AdminNotices\AdminNotices' => $strauss_src . '/stellarwp/admin-notices/src/AdminNotices.php',
   'Give\Vendors\StellarWP\AdminNotices\AdminNotice' => $strauss_src . '/stellarwp/admin-notices/src/AdminNotice.php',
   'Give\Vendors\StellarWP\AdminNotices\Exceptions\NotificationCollisionException' => $strauss_src . '/stellarwp/admin-notices/src/Exceptions/NotificationCollisionException.php',
   'Give\Vendors\StellarWP\Validation\Rules\ExcludeIf' => $strauss_src . '/stellarwp/validation/src/Rules/ExcludeIf.php',
   'Give\Vendors\StellarWP\Validation\Rules\Required' => $strauss_src . '/stellarwp/validation/src/Rules/Required.php',
   'Give\Vendors\StellarWP\Validation\Rules\Abstracts\ConditionalRule' => $strauss_src . '/stellarwp/validation/src/Rules/Abstracts/ConditionalRule.php',
   'Give\Vendors\StellarWP\Validation\Rules\NullableUnless' => $strauss_src . '/stellarwp/validation/src/Rules/NullableUnless.php',
   'Give\Vendors\StellarWP\Validation\Rules\NullableIf' => $strauss_src . '/stellarwp/validation/src/Rules/NullableIf.php',
   'Give\Vendors\StellarWP\Validation\Rules\Nullable' => $strauss_src . '/stellarwp/validation/src/Rules/Nullable.php',
   'Give\Vendors\StellarWP\Validation\Rules\Currency' => $strauss_src . '/stellarwp/validation/src/Rules/Currency.php',
   'Give\Vendors\StellarWP\Validation\Rules\Optional' => $strauss_src . '/stellarwp/validation/src/Rules/Optional.php',
   'Give\Vendors\StellarWP\Validation\Rules\Min' => $strauss_src . '/stellarwp/validation/src/Rules/Min.php',
   'Give\Vendors\StellarWP\Validation\Rules\OptionalUnless' => $strauss_src . '/stellarwp/validation/src/Rules/OptionalUnless.php',
   'Give\Vendors\StellarWP\Validation\Rules\Email' => $strauss_src . '/stellarwp/validation/src/Rules/Email.php',
   'Give\Vendors\StellarWP\Validation\Rules\Numeric' => $strauss_src . '/stellarwp/validation/src/Rules/Numeric.php',
   'Give\Vendors\StellarWP\Validation\Rules\ExcludeUnless' => $strauss_src . '/stellarwp/validation/src/Rules/ExcludeUnless.php',
   'Give\Vendors\StellarWP\Validation\Rules\InStrict' => $strauss_src . '/stellarwp/validation/src/Rules/InStrict.php',
   'Give\Vendors\StellarWP\Validation\Rules\Size' => $strauss_src . '/stellarwp/validation/src/Rules/Size.php',
   'Give\Vendors\StellarWP\Validation\Rules\OptionalIf' => $strauss_src . '/stellarwp/validation/src/Rules/OptionalIf.php',
   'Give\Vendors\StellarWP\Validation\Rules\Exclude' => $strauss_src . '/stellarwp/validation/src/Rules/Exclude.php',
   'Give\Vendors\StellarWP\Validation\Rules\Max' => $strauss_src . '/stellarwp/validation/src/Rules/Max.php',
   'Give\Vendors\StellarWP\Validation\Rules\In' => $strauss_src . '/stellarwp/validation/src/Rules/In.php',
   'Give\Vendors\StellarWP\Validation\Rules\DateTime' => $strauss_src . '/stellarwp/validation/src/Rules/DateTime.php',
   'Give\Vendors\StellarWP\Validation\Rules\Integer' => $strauss_src . '/stellarwp/validation/src/Rules/Integer.php',
   'Give\Vendors\StellarWP\Validation\Rules\Boolean' => $strauss_src . '/stellarwp/validation/src/Rules/Boolean.php',
   'Give\Vendors\StellarWP\Validation\Contracts\ValidationRule' => $strauss_src . '/stellarwp/validation/src/Contracts/ValidationRule.php',
   'Give\Vendors\StellarWP\Validation\Contracts\ValidatesOnFrontEnd' => $strauss_src . '/stellarwp/validation/src/Contracts/ValidatesOnFrontEnd.php',
   'Give\Vendors\StellarWP\Validation\Contracts\Sanitizer' => $strauss_src . '/stellarwp/validation/src/Contracts/Sanitizer.php',
   'Give\Vendors\StellarWP\Validation\Commands\ExcludeValue' => $strauss_src . '/stellarwp/validation/src/Commands/ExcludeValue.php',
   'Give\Vendors\StellarWP\Validation\Commands\SkipValidationRules' => $strauss_src . '/stellarwp/validation/src/Commands/SkipValidationRules.php',
   'Give\Vendors\StellarWP\Validation\Concerns\HasValidationRules' => $strauss_src . '/stellarwp/validation/src/Concerns/HasValidationRules.php',
   'Give\Vendors\StellarWP\Validation\ValidationRulesRegistrar' => $strauss_src . '/stellarwp/validation/src/ValidationRulesRegistrar.php',
   'Give\Vendors\StellarWP\Validation\Validator' => $strauss_src . '/stellarwp/validation/src/Validator.php',
   'Give\Vendors\StellarWP\Validation\Config' => $strauss_src . '/stellarwp/validation/src/Config.php',
   'Give\Vendors\StellarWP\Validation\ValidationRuleSet' => $strauss_src . '/stellarwp/validation/src/ValidationRuleSet.php',
   'Give\Vendors\StellarWP\Validation\Exceptions\Contracts\ValidationExceptionInterface' => $strauss_src . '/stellarwp/validation/src/Exceptions/Contracts/ValidationExceptionInterface.php',
   'Give\Vendors\StellarWP\Validation\Exceptions\ValidationException' => $strauss_src . '/stellarwp/validation/src/Exceptions/ValidationException.php',
   'Give\Vendors\StellarWP\Validation\ServiceProvider' => $strauss_src . '/stellarwp/validation/src/ServiceProvider.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\InputBag' => $strauss_src . '/symfony/http-foundation/InputBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\AcceptHeaderItem' => $strauss_src . '/symfony/http-foundation/AcceptHeaderItem.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\RedirectResponse' => $strauss_src . '/symfony/http-foundation/RedirectResponse.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\File' => $strauss_src . '/symfony/http-foundation/File/File.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\NoFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/NoFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\UploadException' => $strauss_src . '/symfony/http-foundation/File/Exception/UploadException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\UnexpectedTypeException' => $strauss_src . '/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\FileException' => $strauss_src . '/symfony/http-foundation/File/Exception/FileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException' => $strauss_src . '/symfony/http-foundation/File/Exception/AccessDeniedException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\PartialFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/PartialFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\CannotWriteFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/CannotWriteFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\FormSizeFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/FormSizeFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException' => $strauss_src . '/symfony/http-foundation/File/Exception/FileNotFoundException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\ExtensionFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/ExtensionFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\IniSizeFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/IniSizeFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Exception\NoTmpDirFileException' => $strauss_src . '/symfony/http-foundation/File/Exception/NoTmpDirFileException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\UploadedFile' => $strauss_src . '/symfony/http-foundation/File/UploadedFile.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\File\Stream' => $strauss_src . '/symfony/http-foundation/File/Stream.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\ServerBag' => $strauss_src . '/symfony/http-foundation/ServerBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Cookie' => $strauss_src . '/symfony/http-foundation/Cookie.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\HeaderUtils' => $strauss_src . '/symfony/http-foundation/HeaderUtils.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\IpUtils' => $strauss_src . '/symfony/http-foundation/IpUtils.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseHasCookie' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseHasCookie.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsSuccessful' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseIsSuccessful.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseFormatSame.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame' => $strauss_src . '/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseHeaderSame' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseHeaderSame.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseHasHeader' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseHasHeader.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsUnprocessable' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseIsUnprocessable.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseCookieValueSame' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected' => $strauss_src . '/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\RequestStack' => $strauss_src . '/symfony/http-foundation/RequestStack.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\AcceptHeader' => $strauss_src . '/symfony/http-foundation/AcceptHeader.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\FileBag' => $strauss_src . '/symfony/http-foundation/FileBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Request' => $strauss_src . '/symfony/http-foundation/Request.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\ParameterBag' => $strauss_src . '/symfony/http-foundation/ParameterBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\HeaderBag' => $strauss_src . '/symfony/http-foundation/HeaderBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\UrlHelper' => $strauss_src . '/symfony/http-foundation/UrlHelper.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Exception\RequestExceptionInterface' => $strauss_src . '/symfony/http-foundation/Exception/RequestExceptionInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Exception\SessionNotFoundException' => $strauss_src . '/symfony/http-foundation/Exception/SessionNotFoundException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Exception\JsonException' => $strauss_src . '/symfony/http-foundation/Exception/JsonException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException' => $strauss_src . '/symfony/http-foundation/Exception/SuspiciousOperationException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Exception\BadRequestException' => $strauss_src . '/symfony/http-foundation/Exception/BadRequestException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Exception\ConflictingHeadersException' => $strauss_src . '/symfony/http-foundation/Exception/ConflictingHeadersException.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\RequestMatcherInterface' => $strauss_src . '/symfony/http-foundation/RequestMatcherInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\StreamedResponse' => $strauss_src . '/symfony/http-foundation/StreamedResponse.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\JsonResponse' => $strauss_src . '/symfony/http-foundation/JsonResponse.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface' => $strauss_src . '/symfony/http-foundation/RateLimiter/RequestRateLimiterInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\RateLimiter\AbstractRequestRateLimiter' => $strauss_src . '/symfony/http-foundation/RateLimiter/AbstractRequestRateLimiter.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\BinaryFileResponse' => $strauss_src . '/symfony/http-foundation/BinaryFileResponse.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\ExpressionRequestMatcher' => $strauss_src . '/symfony/http-foundation/ExpressionRequestMatcher.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\SessionInterface' => $strauss_src . '/symfony/http-foundation/Session/SessionInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag' => $strauss_src . '/symfony/http-foundation/Session/Attribute/AttributeBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface' => $strauss_src . '/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag' => $strauss_src . '/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Session' => $strauss_src . '/symfony/http-foundation/Session/Session.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Flash\FlashBag' => $strauss_src . '/symfony/http-foundation/Session/Flash/FlashBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag' => $strauss_src . '/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface' => $strauss_src . '/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\SessionBagProxy' => $strauss_src . '/symfony/http-foundation/Session/SessionBagProxy.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\SessionUtils' => $strauss_src . '/symfony/http-foundation/Session/SessionUtils.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\SessionFactory' => $strauss_src . '/symfony/http-foundation/Session/SessionFactory.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\SessionFactoryInterface' => $strauss_src . '/symfony/http-foundation/Session/SessionFactoryInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\SessionBagInterface' => $strauss_src . '/symfony/http-foundation/Session/SessionBagInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\MetadataBag' => $strauss_src . '/symfony/http-foundation/Session/Storage/MetadataBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory' => $strauss_src . '/symfony/http-foundation/Session/Storage/NativeSessionStorageFactory.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage' => $strauss_src . '/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\MigratingSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\IdentityMarshaller' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/IdentityMarshaller.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\RedisSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\MongoDbSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\NullSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\SessionHandlerFactory' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcachedSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\AbstractSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Handler\MarshallingSessionHandler' => $strauss_src . '/symfony/http-foundation/Session/Storage/Handler/MarshallingSessionHandler.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage' => $strauss_src . '/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage' => $strauss_src . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface' => $strauss_src . '/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorageFactory' => $strauss_src . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorageFactory.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\SessionStorageFactoryInterface' => $strauss_src . '/symfony/http-foundation/Session/Storage/SessionStorageFactoryInterface.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy' => $strauss_src . '/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy' => $strauss_src . '/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorageFactory' => $strauss_src . '/symfony/http-foundation/Session/Storage/MockFileSessionStorageFactory.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\ServiceSessionFactory' => $strauss_src . '/symfony/http-foundation/Session/Storage/ServiceSessionFactory.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage' => $strauss_src . '/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\ResponseHeaderBag' => $strauss_src . '/symfony/http-foundation/ResponseHeaderBag.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\RequestMatcher' => $strauss_src . '/symfony/http-foundation/RequestMatcher.php',
   'Give\Vendors\Symfony\Component\HttpFoundation\Response' => $strauss_src . '/symfony/http-foundation/Response.php',
   'Give\Vendors\Symfony\Polyfill\Php80\Php80' => $strauss_src . '/symfony/polyfill-php80/Php80.php',
   'Attribute' => $strauss_src . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
   'Stringable' => $strauss_src . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
   'UnhandledMatchError' => $strauss_src . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
   'PhpToken' => $strauss_src . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
   'ValueError' => $strauss_src . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
   'Give\Vendors\Symfony\Polyfill\Php80\PhpToken' => $strauss_src . '/symfony/polyfill-php80/PhpToken.php',
);