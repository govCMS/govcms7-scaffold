ARG CLI_IMAGE
FROM ${CLI_IMAGE} as code

FROM govcmsdev/php

COPY --from=code /app /app
