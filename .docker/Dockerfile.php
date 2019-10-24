ARG CLI_IMAGE
ARG GOVCMS_IMAGE_VERSION=latest

FROM ${CLI_IMAGE} as cli
FROM govcmslagoon/php:${GOVCMS_IMAGE_VERSION}

COPY --from=cli /app /app
