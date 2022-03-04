<?php


class ValidationUtil 
{
  static public function validate(LoginRequest $loginRequest)
  {
    if(!isset($loginRequest->username)) {
      throw new ValidationException("Username is null"); 
    } else if (!isset($loginRequest->password)) {
      throw new ValidationException("Password is null"); 
    }
  }

  static public function validationReflection($request)
  {
    $reflection = new ReflectionClass($request);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

    foreach ($properties as $property) {
      if(!$property->isInitialized($request)) {
        throw new ValidationException("$property->name is not set");
      } else if (is_null($property->getValue($request))) {
        throw new ValidationException("$property->name is null");
      }
    }
  }
}
