# Being able to make decisions, based on conditions, using data is at the core of development.

## Conditions are just comparisons between values.
Here are a list of comparison operators that we use with conditions.

| Operators     | Result  |
| ------------- |:-------------|
| `$a == $b`      | *TRUE* if values are the same
| `$a === $b`      | *TRUE* if values and type are the same      
| `$a != $b` | *TRUE* if values are not equal
| `$a <> $b` | *TRUE* if values are not equal
| `$a !== $b` | *TRUE* if values are not equal OR types are not equal
| `$a < $b` | *TRUE* if value of `$a` is less than the value of `$b`
| `$a > $b` | *TRUE* if value of `$a` is less than the value of `$b`
| `$a <= $b` | *TRUE* if value of `$a` is smaller or equal to the value of `$b`
| `$a >= $b` | *TRUE* if value of `$a` is greater or equal to the value of `$b`
| `$a <=> $b` | (Spaceship) An integer less than, equal to, or greater than zero when `$a` is respectively less than, equal to, or greater than `$b`

If you want to combined two or more conditions you can use logical operators

| Operators | Result |
| --------- |:-------|
| `$a && $b` | *TRUE* if both `$a` and `$b` are TRUE|
| `$a` &#124;&#124; `$b` | *TRUE* if either `$a` or `$b` are TRUE |
| `! $a` | *TRUE* if `$a` is *NOT* TRUE|
| `$a xor $b` | *TRUE* if either `$a` or `$b` are TRUE, but not both |
