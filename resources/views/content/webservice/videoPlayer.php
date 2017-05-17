<html>
  <title>Welcome</title>
    <body>
      <video controls>
        <source src="{{ route('getVideo', $file)  }}" type="video/mp4"/>
        <source src="{{ route('getVideo', $file)  }}" type="video/webm"/>
        <source src="{{ route('getVideo', $file)  }}" type="video/ogg"/>
        <!-- fallback -->
        Your browser does not support the <code>video</code> element.
    </video>
  </body>
</html> 