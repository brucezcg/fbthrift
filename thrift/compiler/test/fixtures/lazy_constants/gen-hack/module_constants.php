<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
class module_CONSTANTS {
  /**
   * Original thrift constant:-
   * i32 myInt
   */
  private static ?int $__myInt = null;
  public static function myInt(): int {
    if (self::$__myInt == null) {
      self::$__myInt = 1337;
    }
    return self::$__myInt;
  }

  /**
   * Original thrift constant:-
   * string name
   */
  private static ?string $__name = null;
  public static function name(): string {
    if (self::$__name == null) {
      self::$__name = "Mark Zuckerberg";
    }
    return self::$__name;
  }

  /**
   * Original thrift constant:-
   * list<map<string, i32>> states
   */
  private static ?Vector<Map<string, int>> $__states = null;
  public static function states(): Vector<Map<string, int>> {
    if (self::$__states == null) {
      self::$__states = Vector {
        Map {
          "San Diego" => 3211000,
          "Sacramento" => 479600,
          "SF" => 837400,
        },
        Map {
          "New York" => 8406000,
          "Albany" => 98400,
        },
      };
    }
    return self::$__states;
  }

  /**
   * Original thrift constant:-
   * double x
   */
  private static ?float $__x = null;
  public static function x(): float {
    if (self::$__x == null) {
      self::$__x = 1.0;
    }
    return self::$__x;
  }

  /**
   * Original thrift constant:-
   * double y
   */
  private static ?float $__y = null;
  public static function y(): float {
    if (self::$__y == null) {
      self::$__y = 1000000.0;
    }
    return self::$__y;
  }

  /**
   * Original thrift constant:-
   * double z
   */
  private static ?float $__z = null;
  public static function z(): float {
    if (self::$__z == null) {
      self::$__z = 1e+09;
    }
    return self::$__z;
  }

  /**
   * Original thrift constant:-
   * struct module.Internship instagram
   */
  private static ?Internship $__instagram = null;
  public static function instagram(): Internship {
    if (self::$__instagram == null) {
      self::$__instagram = new Internship(
        12,
        "Software Engineer",
        Company::INSTAGRAM,
      );
    }
    return self::$__instagram;
  }

  /**
   * Original thrift constant:-
   * list<struct module.Range> kRanges
   */
  private static ?Vector<Range> $__kRanges = null;
  public static function kRanges(): Vector<Range> {
    if (self::$__kRanges == null) {
      self::$__kRanges = Vector {
        new Range(
          1,
          2,
        ),
        new Range(
          5,
          6,
        ),
      };
    }
    return self::$__kRanges;
  }

  /**
   * Original thrift constant:-
   * list<struct module.Internship> internList
   */
  private static ?Vector<Internship> $__internList = null;
  public static function internList(): Vector<Internship> {
    if (self::$__internList == null) {
      self::$__internList = Vector {
        new Internship(
          12,
          "Software Engineer",
          Company::INSTAGRAM,
        ),
        new Internship(
          10,
          "Sales Intern",
          Company::FACEBOOK,
        ),
      };
    }
    return self::$__internList;
  }

  /**
   * Original thrift constant:-
   * string apostrophe
   */
  private static ?string $__apostrophe = null;
  public static function apostrophe(): string {
    if (self::$__apostrophe == null) {
      self::$__apostrophe = "'";
    }
    return self::$__apostrophe;
  }

  /**
   * Original thrift constant:-
   * string tripleApostrophe
   */
  private static ?string $__tripleApostrophe = null;
  public static function tripleApostrophe(): string {
    if (self::$__tripleApostrophe == null) {
      self::$__tripleApostrophe = "'''";
    }
    return self::$__tripleApostrophe;
  }

  /**
   * Original thrift constant:-
   * string quotationMark
   */
  private static ?string $__quotationMark = null;
  public static function quotationMark(): string {
    if (self::$__quotationMark == null) {
      self::$__quotationMark = "\"";
    }
    return self::$__quotationMark;
  }

  /**
   * Original thrift constant:-
   * string backslash
   */
  private static ?string $__backslash = null;
  public static function backslash(): string {
    if (self::$__backslash == null) {
      self::$__backslash = "\\";
    }
    return self::$__backslash;
  }

  /**
   * Original thrift constant:-
   * string escaped_a
   */
  private static ?string $__escaped_a = null;
  public static function escaped_a(): string {
    if (self::$__escaped_a == null) {
      self::$__escaped_a = "\x61";
    }
    return self::$__escaped_a;
  }

  /**
   * Original thrift constant:-
   * map<string, i32> char2ascii
   */
  private static ?Map<string, int> $__char2ascii = null;
  public static function char2ascii(): Map<string, int> {
    if (self::$__char2ascii == null) {
      self::$__char2ascii = Map {
        "'" => 39,
        "\"" => 34,
        "\\" => 92,
        "\x61" => 97,
      };
    }
    return self::$__char2ascii;
  }


  private static ?array $____values = null;
  public static function __values(): array {
    if (self::$____values == null) {
      self::$____values = array(
        "myInt" => 1337,
        "name" => "Mark Zuckerberg",
        "states" => Vector {
          Map {
            "San Diego" => 3211000,
            "Sacramento" => 479600,
            "SF" => 837400,
          },
          Map {
            "New York" => 8406000,
            "Albany" => 98400,
          },
        },
        "x" => 1.0,
        "y" => 1000000.0,
        "z" => 1e+09,
        "instagram" => new Internship(
          12,
          "Software Engineer",
          Company::INSTAGRAM,
        ),
        "kRanges" => Vector {
          new Range(
            1,
            2,
          ),
          new Range(
            5,
            6,
          ),
        },
        "internList" => Vector {
          new Internship(
            12,
            "Software Engineer",
            Company::INSTAGRAM,
          ),
          new Internship(
            10,
            "Sales Intern",
            Company::FACEBOOK,
          ),
        },
        "apostrophe" => "'",
        "tripleApostrophe" => "'''",
        "quotationMark" => "\"",
        "backslash" => "\\",
        "escaped_a" => "\x61",
        "char2ascii" => Map {
          "'" => 39,
          "\"" => 34,
          "\\" => 92,
          "\x61" => 97,
        },
      );
    }
    return self::$____values;
  }

}

