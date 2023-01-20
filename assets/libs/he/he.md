https://github.com/mathiasbynens/he

he.encode('foo © bar ≠ baz 𝌆 qux');
// → 'foo &#xA9; bar &#x2260; baz &#x1D306; qux'

he.decode('foo &copy; bar &ne; baz &#x1D306; qux');
// → 'foo © bar ≠ baz 𝌆 qux'
