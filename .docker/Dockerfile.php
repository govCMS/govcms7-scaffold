ARG CODE_IMAGE
FROM ${CODE_IMAGE} as code

FROM govcmsdev/php

COPY --from=code /app /app
